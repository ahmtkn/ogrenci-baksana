<div id="modal-basic" class="modal fade bd-example-modal-m" tabindex="-1" role="document" aria-labelledby="modalm"
     aria-hidden="true">
    <div class="modal-dialog modal-m">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Kupon Listesi Ekle</h4>
            </div>
            <form id="form-add" method="POST" action="{{ route('coupon.import', $id) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <fieldset class="form-group filename">
                        <div class="alert alert-warning">
                            Lütfen yükleme yapmadan önce aşağıdaki şablonu kullanarak düzenleme yaptığınızdan emin olun.<br>
                            <small> <a href="{{ route('coupon.export') }}">Şablonu indirmek için
                                    tıklayın </a></small>
                        </div>
                    </fieldset>
                    <div class="alert alert-danger d-none" id="msg-errors">
                        <ul>

                        </ul>
                    </div>
                    <fieldset class="form-group filename">
                        <label class="form-label">Dosya</label>
                        <input type="file" class="form-control" name="file" required>
                    </fieldset>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary btn-save btn-sm">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("form#form-add").submit(function (e) {
        $('.error').removeClass('error');
        $form = $(this);
        $action = $form.attr('action');
        $method = $form.attr('method');
        $data = new FormData($form[0]);

        $.ajax({
            type: $method,
            url: $action,
            data: $data,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('.btn-submit').attr('disabled', true);
                let timerInterval
                Swal.fire({
                    title: 'Auto close alert!',
                    html: 'I will close in <b></b> milliseconds.',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                    }
                })
            },
            error: function (data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                })
            },
            success: function (data) {
                try {
                    Swal.fire(
                        data.message,
                        data.message,
                        data.result
                    )
                } catch (err) {
                    console.log(err);
                }
                $('.btn-submit').attr('disabled', false);
                $('#modal-basic').modal('hide');
            }
        });
        e.preventDefault();
        return false;
    });
</script>
