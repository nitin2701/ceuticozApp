<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true" >
    <div class="modal-dialog <?php echo $msize;?>">
        <div class="overlay"><i class="fas fa-2x fa-sync fa-spin"></i></div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $heading }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
            <div class="modal-footer justify-content-between">
                        @if($close)
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{$close}}</button>
                        @endif
                        @if($save)
                                <button type="button" class="btn btn-primary">{{$save}}</button>
                        @endif
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>