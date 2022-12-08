@push('css')
@endpush
<div>
    <x-slot name="title">
        Carrer
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box mr-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <h4>Carrer List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <button type="button"
                                    class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"
                                    wire:click="carrerModal"><i class="mdi mdi-plus mr-1"></i>NEW jOB</button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <div wire:ignore class="table-responsive">
                        <div wire:ignore class="table-responsive">
                            <table class="table table-bordered dt-responsive nowrap" id="carrerTable"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Modal content for the above example -->
    <div wire:ignore.self class="modal fade" id="carrerModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Carrer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="carrerSave">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Title</label>
                                    <input class="form-control" type="text" wire:model.lazy="title" placeholder="Title">
                                    @error('title') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Job Title</label>
                                    <input class="form-control" type="text" wire:model.lazy="job_title" placeholder="Job Title">
                                    @error('job_title') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label">Cerculer Image</label>
                                    <div class="custom-file">
                                        <input type="file" wire:model.lazy="cerculer_image">
                                        @error('cerculer_image') <span class="error">{{ $message }}</span> @enderror
                                        @if (!$cerculer_image)
                                        @if($QueryUpdate)
                                        <img src="{{ asset('storage/photo')}}/{{ $QueryUpdate->cerculer_image }}"
                                            style="height:30px; weight:30px;" alt="Image" class="img-circle img-fluid">
                                        @endif
                                        @endif
                                        @if ($cerculer_image)
                                        <img src="{{ $cerculer_image->temporaryUrl() }}" style="height:30px; weight:30px;"
                                            alt="Image" class="img-circle img-fluid">
                                        @endif
                                        {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="basicpill-lastname-input">Status</label>
                                    <select class="form-control" wire:model.lazy="is_active">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @error('is_active') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" wire:target="image"
                            wire:loading.attr="disabled">Submit</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{-- Start Delete Modal --}}
    <div class="modal fade" id="DeletePopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this records?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger" wire:click="ConfirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Delete Modal --}}

</div>
@push('scripts')
<script>
    function callEdit(id) {
        @this.call('carrerEdit', id);
    }
    function callDelete(id) {
        @this.call('DeleteModal', id);
    }
        $(document).ready(function () {
            var datatable = $('#carrerTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('data.carrer_table')}}",
                columns: [
                    {
                        title: 'SL',
                        data: 'id'
                    },

                    {
                        title: 'Title',
                        data:  'title',
                        name:  'title'
                    },
                    {
                        title: 'Job Title',
                        data:  'job_title',
                        name:  'job_title'
                    },


                    {
                        title: 'Cerculer Image',
                        data:  'cerculer_image',
                        name:  'cerculer_image'
                    },
                    {
                        title: 'Status',
                        data:  'is_active',
                        name:  'is_active'
                    },
                    {
                        title: 'Action',
                        data:  'action',
                        name:  'action'
                    },
                ]
            });

            window.livewire.on('success', message => {
                datatable.draw(true);
            });
        });
</script>
@endpush
