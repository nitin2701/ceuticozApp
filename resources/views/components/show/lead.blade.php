<div class="view-details">
     
</div>

@push('page_scripts')
<script>
$(document).ready(function () {
        $(document).on('click', '.openModal', function (e) {
                 var id             =       $(this).attr("data-id");        
                 var href          =       $(this).attr("data-href");        
                 jQuery(".modal .overlay").show(); 
                 $.get( href, function (data) {
                        jQuery(".modal .overlay").hide(); 
                       jQuery(".view-details").html(data);
                });
        });
});
</script>
@endpush
