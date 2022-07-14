<script type="text/javascript" src="<?= base_url() ?>assets/js/polygon.min.js"></script>
<script>
    function PolygonCreator(map) {
        this.map = map;
        this.pen = new Pen(this.map);
        var thisOjb = this;
        var jalur = "";
        this.event = google.maps.event.addListener(thisOjb.map, 'click', function(event) {
            thisOjb.pen.draw(event.latLng);
            jalur += event.latLng;
            jalur += ";";
        });

        this.showData = function() {
            return this.pen.getData();
        }

        this.showColor = function() {
            return this.pen.getColor();
        }
        this.showJalur = function() {
            return jalur;
        }

        this.destroy = function() {
            this.pen.deleteMis();
            if (null != this.pen.polygon) {
                this.pen.polygon.remove();
            }
            google.maps.event.removeListener(this.event);
        }
    }
    $(function() {
        var options = {
            <?php if ($desa['lat'] !== '') { ?>
                center: new google.maps.LatLng(<?= $desa['lat'] ?>, <?= $desa['lng'] ?>),
                zoom: <?= $desa['zoom'] ?>,
                mapTypeId: google.maps.MapTypeId.<?= strtoupper($desa['map_tipe']) ?>
            <?php } else { ?>
                center: new google.maps.LatLng(-7.885619783139936, 110.39893195996092),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            <?php } ?>
        };
        var map = new google.maps.Map(document.getElementById('map'), options);
        <?php $path = preg_split('/\\;/', $garis['path']);
echo 'var path = [';

foreach ($path as $p) {
    if ($p !== '') {
        echo 'new google.maps.LatLng' . $p . ',';
    }
}
echo '];'; ?>


        var polyline = new google.maps.Polyline({
            path: path,
            strokeColor: "#00ff00",
            strokeOpacity: 0.6,
            strokeWeight: 5
        });


        polyline.setMap(map);


        <?php ?>
        google.maps.event.addListener(polyline, 'mouseover', function(e) {
            polyline.setOptions({
                fillColor: '#0000ff',
                strokeColor: '#0000ff'
            });
        });
        google.maps.event.addListener(polyline, 'mouseout', function(e) {
            polyline.setOptions({
                fillColor: '#11ff00',
                strokeColor: '#11ff00'
            });
        });

        var creator = new PolygonCreator(map);
        $('#reset').click(function() {
            creator.destroy();
            creator = null;

            creator = new PolygonCreator(map);
            document.getElementById('dataPanel').value = creator.showData();
        });

        $('#showData').click(function() {
            $('#dataPanel').empty();
            if (null == creator.showJalur()) {
                this.form.submit();
            } else {
                document.getElementById('dataPanel').value = creator.showJalur();
                this.form.submit();
            }
        });

    });
</script>
<style>
    #map {
        width: 420px;
        height: 320px;
        border: 1px solid #000;
    }
</style>
<div id="map"></div>
<?= form_open($form_action) ?>
    <input type="hidden" id="dataPanel" name="path" value="<?= $garis['path'] ?>">
    <div class="buttonpane" style="text-align: right; width:400px;position:absolute;bottom:0px;">
        <div class="uibutton-group">
            <button class="uibutton" type="button" onclick="$('#window').dialog('close');">Close</button>
            <input class="uibutton confirm" id="showData" value="Simpan" type="button" />
        </div>
    </div>
<?= form_close() ?>
