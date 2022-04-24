<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bullvio Teknoloji ve Yazılım 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- <script src="plugin/ckeditor1/ckeditor.js"></script>
<script src="plugin/ckfinder1/ckfinder.js"></script> -->
<script src="plugin/ckeditor5-build-classic/ckeditor.js"></script>
<script src="plugin/ckfinder/ckfinder.js"></script>

<script>
$(document).ready(function() {

    $("#btnAddNew").click(function() {

        var rowNumber = $("#ProductTable tbody tr").length;

        var trNew = "";

        var addLink = "<div class=\"upload-btn" + rowNumber +
            "\"><input type=\"file\" name=\"photo[]\"  style=\"margin-bottom:5px;\"></div>";

        var deleteRow = "<a href=\"javascript:void()\" class=\"Delete btn btn-danger btn-xs\">X</a>";

        trNew = trNew + "<tr> ";

        trNew += "<td>" + addLink + "</td>";
        trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";

        trNew = trNew + " </tr>";

        $("#ProductTable tbody").append(trNew);

    });

    $('#ProductTable').delegate('a.Delete', 'click', function() {
        $(this).parent().parent().fadeOut('slow').remove();
        return false;
    });

});
</script>