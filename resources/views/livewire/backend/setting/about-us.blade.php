@push('css')

@endpush
<div>
    <x-slot name="title">
        Company About Us Info
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form wire:submit.prevent="AboutUsSave">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="search-box mr-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        <h4 class="card-title">Company About Us Info</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Staring Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="heading"
                                        placeholder="Staring Heading">
                                    @error('heading') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Staring Sub Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="sub_heading" placeholder="Phone">
                                    @error('sub_heading') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Content Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="content_heading"
                                        placeholder="Content Heading">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Content Description</label>
                                    <textarea class="form-control" id="content_description"
                                        wire:model.lazy="content_description" placeholder="Content Description"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Content Image(141*29 PNG)
                                        @if (!$content_image)
                                        @if($AboutUs)
                                        <img src="{{ asset('storage/photo/'.$AboutUs->content_image)}}"
                                            style="height:30px; weight:30px;" alt="Image2" class="img-circle img-fluid">
                                        @endif
                                        @endif

                                        @if ($content_image)
                                        <img src="{{ $content_image->temporaryUrl() }}" style="height:30px; weight:30px;"
                                            alt="Image" class="img-circle img-fluid">
                                        @endif
                                    </label>
                                    <input type="file" wire:model.lazy="content_image" x-ref="logo">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Vision Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="vision_heading" placeholder="Vision Heading">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Vision Sub Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="vision_sub_heading" placeholder="Vision Sub Heading">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Vission Description</label>
                                    <textarea class="form-control" id="mission_description"
                                        wire:model.lazy="mission_description" placeholder="Mission Description"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Mission  Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="mission_heading" placeholder="Mission Heading">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Mission Sub Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="mission_sub_heading" placeholder="Mission Sub  Heading">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Mission Description</label>
                                    <textarea class="form-control" id="vision_description"
                                        wire:model.lazy="vision_description" placeholder="Vission Description"></textarea>
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Value Heading</label>
                                    <input class="form-control" type="text" wire:model.lazy="value_heading"
                                        placeholder="Value Heading">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Value Description</label>
                                    <textarea class="form-control" id="value_description"
                                        wire:model.lazy="value_description" placeholder="Value Description"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Total Client</label>
                                    <input class="form-control" type="text" wire:model.lazy="total_client"
                                        placeholder="Total Client">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Total Client Background Image(141*29 PNG)
                                        @if (!$total_client_background_image)
                                        @if($AboutUs)
                                        <img src="{{ asset('storage/photo/'.$AboutUs->total_client_background_image)}}"
                                            style="height:30px; weight:30px;" alt="Image2" class="img-circle img-fluid">
                                        @endif
                                        @endif

                                        @if ($total_client_background_image)
                                        <img src="{{ $total_client_background_image->temporaryUrl() }}" style="height:30px; weight:30px;"
                                            alt="Image" class="img-circle img-fluid">
                                        @endif
                                    </label>
                                    <input type="file" wire:model.lazy="total_client_background_image" x-ref="logo">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="basicpill-firstname-input">Total Year Record</label>
                                    <input class="form-control" type="text" wire:model.lazy="total_year_record"
                                        placeholder="Total Year Record">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Total Year Background Image(141*29 PNG)
                                        @if (!$total_year_background_image)
                                        @if($AboutUs)
                                        <img src="{{ asset('storage/photo/'.$AboutUs->total_year_background_image)}}"
                                            style="height:30px; weight:30px;" alt="Image2" class="img-circle img-fluid">
                                        @endif
                                        @endif

                                        @if ($total_year_background_image)
                                        <img src="{{ $total_year_background_image->temporaryUrl() }}" style="height:30px; weight:30px;"
                                            alt="Image" class="img-circle img-fluid">
                                        @endif
                                    </label>
                                    <input type="file" wire:model.lazy="total_year_background_image" x-ref="logo">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">On time Delievery Caption</label>
                                    <input class="form-control" id="" wire:model.lazy="on_time_delivery_caption"
                                        placeholder="On time Delievery Caption">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">On time Delievery Background Image(141*29 PNG)
                                        @if (!$on_time_delivery_caption_backgroung_image)
                                        @if($AboutUs)
                                        <img src="{{ asset('storage/photo/'.$AboutUs->on_time_delivery_caption_backgroung_image)}}"
                                            style="height:30px; weight:30px;" alt="Image2" class="img-circle img-fluid">
                                        @endif
                                        @endif

                                        @if ($on_time_delivery_caption_backgroung_image)
                                        <img src="{{ $on_time_delivery_caption_backgroung_image->temporaryUrl() }}" style="height:30px; weight:30px;"
                                            alt="Image" class="img-circle img-fluid">
                                        @endif
                                    </label>
                                    <input type="file" wire:model.lazy="on_time_delivery_caption_backgroung_image" x-ref="logo">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Our Value Title</label>
                                    <input class="form-control" id="" wire:model.lazy="our_value_title"
                                        placeholder="Our Value Title">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Our Value Heading</label>
                                    <input class="form-control" id="" wire:model.lazy="our_value_heading"
                                        placeholder="Our Value Heading">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Our Value  Sub Heading</label>
                                    <input class="form-control" id="" wire:model.lazy="our_value_sub_heading"
                                        placeholder="Our Value  Sub Heading">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div wire:ignore class="form-group">
                                    <label for="basicpill-lastname-input">Our Value  Description</label>
                                    <textarea class="form-control" id="our_value_description" wire:model.lazy="our_value_description"
                                        placeholder="Our Value  Description"></textarea>
                                </div>
                            </div>

                            {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Our Value Image(141*29 PNG)
                                        @if (!$our_value_image)
                                        @if($AboutUs)
                                        <img src="{{ asset('storage/photo/'.$AboutUs->our_value_image)}}"
                                            style="height:30px; weight:30px;" alt="Image2" class="img-circle img-fluid">
                                        @endif
                                        @endif

                                        @if ($our_value_image)
                                        <img src="{{ $our_value_image->temporaryUrl() }}" style="height:30px; weight:30px;"
                                            alt="Image" class="img-circle img-fluid">
                                        @endif
                                    </label>
                                    <input type="file" wire:model.lazy="our_value_image" x-ref="logo">
                                </div>
                            </div> --}}
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                @can('edit company_info')
                                <center><button type="submit" class="btn btn-success w-lg waves-effect waves-light"
                                        wire:target="logo" wire:loading.attr="disabled">Update</button></center>
                                @endcan
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>

$(document).ready(function () {

    if ($("#content_description").length > 0) {
    tinymce.init({
      selector: "textarea#content_description",
      height: 250,
	   forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('content_description', editor.getContent());
            });
        },
      plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
      style_formats: [{
        title: 'Bold text',
        inline: 'b'
      }, {
        title: 'Red text',
        inline: 'span',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Red header',
        block: 'h1',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Example 1',
        inline: 'span',
        classes: 'example1'
      }, {
        title: 'Example 2',
        inline: 'span',
        classes: 'example2'
      }, {
        title: 'Table styles'
      }, {
        title: 'Table row 1',
        selector: 'tr',
        classes: 'tablerow1'
      }]
    });
  }

  if ($("#mission_description").length > 0) {
    tinymce.init({
      selector: "textarea#mission_description",
      height: 250,
	   forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('mission_description', editor.getContent());
            });
        },
      plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
      style_formats: [{
        title: 'Bold text',
        inline: 'b'
      }, {
        title: 'Red text',
        inline: 'span',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Red header',
        block: 'h1',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Example 1',
        inline: 'span',
        classes: 'example1'
      }, {
        title: 'Example 2',
        inline: 'span',
        classes: 'example2'
      }, {
        title: 'Table styles'
      }, {
        title: 'Table row 1',
        selector: 'tr',
        classes: 'tablerow1'
      }]
    });
  }


  if ($("#vision_description").length > 0) {
    tinymce.init({
      selector: "textarea#vision_description",
      height: 250,
	   forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('vision_description', editor.getContent());
            });
        },
      plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
      style_formats: [{
        title: 'Bold text',
        inline: 'b'
      }, {
        title: 'Red text',
        inline: 'span',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Red header',
        block: 'h1',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Example 1',
        inline: 'span',
        classes: 'example1'
      }, {
        title: 'Example 2',
        inline: 'span',
        classes: 'example2'
      }, {
        title: 'Table styles'
      }, {
        title: 'Table row 1',
        selector: 'tr',
        classes: 'tablerow1'
      }]
    });
  }


  if ($("#value_description").length > 0) {
    tinymce.init({
      selector: "textarea#value_description",
      height: 250,
	   forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('value_description', editor.getContent());
            });
        },
      plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
      style_formats: [{
        title: 'Bold text',
        inline: 'b'
      }, {
        title: 'Red text',
        inline: 'span',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Red header',
        block: 'h1',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Example 1',
        inline: 'span',
        classes: 'example1'
      }, {
        title: 'Example 2',
        inline: 'span',
        classes: 'example2'
      }, {
        title: 'Table styles'
      }, {
        title: 'Table row 1',
        selector: 'tr',
        classes: 'tablerow1'
      }]
    });
  }

  if ($("#our_value_description").length > 0) {
    tinymce.init({
      selector: "textarea#our_value_description",
      height: 250,
	   forced_root_block: false,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
            editor.on('change', function (e) {
            @this.set('our_value_description', editor.getContent());
            });
        },
      plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
      style_formats: [{
        title: 'Bold text',
        inline: 'b'
      }, {
        title: 'Red text',
        inline: 'span',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Red header',
        block: 'h1',
        styles: {
          color: '#ff0000'
        }
      }, {
        title: 'Example 1',
        inline: 'span',
        classes: 'example1'
      }, {
        title: 'Example 2',
        inline: 'span',
        classes: 'example2'
      }, {
        title: 'Table styles'
      }, {
        title: 'Table row 1',
        selector: 'tr',
        classes: 'tablerow1'
      }]
    });
  }


  $('.summernote').summernote({
    height: 300,
    // set editor height
    minHeight: null,
    // set minimum height of editor
    maxHeight: null,
    // set maximum height of editor
    focus: true // set focus to editable area after initializing summernote
  });
});
</script>

@endpush
