@extends('app')
    @section('title', 'Strechy z hôr/ADMIN')
@section('content')
    <div class="admin-page">
        <div class="header">
            <span>Logout </span><a href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i></a>
        </div>
        <div class="container box">
            @if(!isset(Auth::user()->email))
                <script>window.location = "/login";</script>
            @endif
        </div>

        {{--    <div class="alert alert-danger success-block">--}}
        {{--        <strong>{{success}}</strong>--}}
        {{--    </div>--}}
        <div class="container">
            <div class="uploadFile-form">
                <h2>Galéria - upload obrázkov a popis</h2>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
                @if(session()->has('success'))
                    <p class="alert alert-success">{{ session()->get('success') }}</p>
                @endif

                @if (!empty($success))
                    <p class="alert alert-success">{{ $success }}</p>
                @endif
                <form method="post" action="{{url('/gallery')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="desc">Popis:</label>
                        <input type="text" class="form-control" name="desc"/>
                    </div>
                    <div class="form-group">
                        <label for="imageInput">Obrázok:</label>
                        <input type="file" class="form-control" name="input_img" id="imageInput" data-preview="#preview"/>
                    </div>
                    <div class="form-group">
                        <input class="button-submit" type="submit">
                    </div>
                </form>
            </div>
        </div>

        <hr class="fancy-line"></hr>
        <div class="container">
            <h3>Galéria obrázkov uložených v databáze</h3>
            <div class="row">
                @foreach($gallery as $image)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 gallery-content justify-content-around">
                        <div class="gallery-content-item" id="gallery-item-{{$image->id}}">
                            <label for="file-input-{{$image->id}}">
                                <img src="{{asset('img/galleryImages').'/'.$image->filename}}">
                            </label>
                            <input id="file-input-{{$image->id}}" type="file" name="input_img" disabled/>
                                <textarea disabled>{{$image->desc}}</textarea>
                            <div class="gallery-action">
                                <a href="#" class="delete-gallery-item" data-id ={{$image->id}} data-token={{ csrf_token() }}><i class="fas fa-trash"></i></a>
                                <a href="#" class="edit-gallery-item" data-id ={{$image->id}}><i class="fas fa-pen"></i></a>
                                <a href="#" class="confirm-gallery-item" data-id ={{$image->id}} data-token={{ csrf_token() }}><i class="fas fa-check"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $gallery->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(".delete-gallery-item").click(
            function(event) {
                event.preventDefault();
                var id = $(this).attr('data-id');
                var token = $(this).attr('data-token');

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-success'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Vymazať príspevok?',
                    text: "Ste si istý, že chcete vymazať tento príspevok?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Vymazať',
                    cancelButtonText: 'Nie, zruš!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {

                        $.ajax(
                            {
                                url: "/gallery/delete/" + id,
                                type: 'delete',
                                dataType: 'JSON',
                                data: {
                                    "id": id,
                                    "_method": 'DELETE',
                                    "_token": token,
                                },
                                success: function (data) {
                                    if(data.success){
                                        swalWithBootstrapButtons.fire({
                                            title: 'Sccess!',
                                            text: 'Dáta boli úspešne vymazané!',
                                            icon: 'success',
                                            confirmButtonColor: '#E71D36',
                                            cancelButtonColor: '#03071e',
                                        })
                                        setTimeout(
                                            function()
                                            {
                                                location.reload();
                                            }, 2000);

                                    } else{
                                        Swal.fire({
                                            title: 'Error!',
                                            text: 'Oops, nepodarilo sa vymazať dáta!',
                                            icon: 'error',
                                            showConfirmButton: false,
                                            timer: 1800
                                        })
                                        setTimeout(
                                            function()
                                            {
                                                location.reload();
                                            }, 2000);
                                    }

                                },
                                failure: function () {
                                    Swal.fire(
                                        "Internal Error",
                                        "Oops, something wrong.", // had a missing comma
                                        "error"
                                    )
                                }
                            });
                    } else if (
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Zrušené',
                            'Dáta neboli vymazané!',
                            'error'
                        )
                    }
                })
            }
        );

        $( ".confirm-gallery-item" ).hide();
        $(".edit-gallery-item").on('click',function (event) {
            event.preventDefault();
            var id = $(this).attr('data-id');
            $('#gallery-item-'+ id + ' textarea').prop('disabled', function () {
                return ! $(this).prop('disabled');
            });

            $( '#file-input-'+ id ).prop('disabled', function () {
                return ! $(this).prop('disabled');
            });
            $("#gallery-item-" + id + " .confirm-gallery-item").toggle();
        });


        $('.confirm-gallery-item').on('click', function (event) {
            event.preventDefault();
            var id = $(this).attr('data-id');
            var desc =  $('#gallery-item-'+ id + ' textarea').val();
            var file = $('#file-input-'+ id)[0].files[0];
            var formData = new FormData();
            formData.append("id", id);
            formData.append("desc", desc);
            formData.append("input_img", file);

            var token = $(this).attr('data-token');
            $.ajax(
                {
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    url: "/gallery/edit/"+id,
                    type: 'POST',
                    dataType: 'JSON',
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function (data)
                    {
                        $('#gallery-item-'+ id + ' textarea').prop('disabled', function () {
                            return ! $(this).prop('disabled');
                        });
                        $( ".confirm-gallery-item" ).hide();


                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Edit bol úspešný!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    }
                });
        })
    </script>
@endsection

