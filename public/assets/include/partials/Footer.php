<script src="vendor/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="vendor/js/bootstrap/bootstrap.min.js"></script>
<script src="vendor/js/select2/select2.full.min.js"></script>
<script src="vendor/js/datatable/jquery.dataTables.min.js"></script>
<script src="vendor/js/datatable/dataTables.bootstrap5.min.js"></script>
<script src="vendor/js/datatable/dataTables.checkboxes.min.js"></script>
<script src="vendor/js/datetime/jquery.datetimepicker.full.min.js"></script>
<script src="vendor/js/ckeditor/ckeditor.js"></script>
<script src="vendor/js/tagify/tagify.min.js"></script>
<script src="vendor/js/tagify/tagify.polyfills.min.js"></script>
<script src="assets/js/main.js "></script>

<script>
    function goBack() {
        window.history.back();
    };
    $(".whishbutton").click(function() {
        $(this).toggleClass("heartactive");
    });
    $('.select-box').select2({
        theme: 'bootstrap-5',
        templateResult: formatState,
        templateSelection: formatState
        // dropdownParent: $(".modal")
        // allowClear: true
        // dropdownCssClass: "testing",
    });
    $('.select2Checkbox').select2({
        theme: 'bootstrap-5',
        templateResult: formatState,
        templateSelection: formatState,
        dropdownCssClass: "CheckboxResult",
    });
    $('.modal').on('shown.bs.modal', function(e) {
        $(this).find('.select-box').select2({
            theme: 'bootstrap-5',
            dropdownParent: $(this).find('.modal-content'),
            templateResult: formatState,
            templateSelection: formatState,
        });
        $(this).find('.select2Checkbox').select2({
            theme: 'bootstrap-5',
            dropdownParent: $(this).find('.modal-content'),
            templateResult: formatState,
            templateSelection: formatState,
            dropdownCssClass: "CheckboxResult",
        });
    })


    $("body, .modal").on("scroll", function() {
        $(".selectDate, .selectTime, .startDate, .endDate").datetimepicker("hide");
    });

    function formatState(opt) {

        if (!opt.id) {
            return opt.text;
        }
        var optimage = $(opt.element).attr('data-image');

        if (!optimage) {
            return opt.text;
        } else {
            var $opt1 = $(
                '<span  class="d-flex align-items-center gap-2 flex-row-reverse justify-content-between" style="min-width:75px;"><img src="' + optimage + '" style="width:20px" /> ' + opt.text + '</span>'
            );
            return $opt1;
        }


    };

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>