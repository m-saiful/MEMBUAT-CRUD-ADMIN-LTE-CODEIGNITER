
<div class="row">
    <div class="col-12">
        <div class="card-body">
            <h4>Dibawah Ini Adalah Data Departemen</h4>
            <table id="tabel_departemen" class="table">
            
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function loadKonten(url) {
        $.ajax(url, {
            type: 'GET',
            success: function (data, status, xhr) {
                var objData = JSON.parse(data);

                $('#tabel_departemen').html(objData.konten);
            },
            error: function (jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg)
            }
        })
    } 

    loadKonten('http://localhost/backend_inventory/departemen/list_departemen');
</script>
