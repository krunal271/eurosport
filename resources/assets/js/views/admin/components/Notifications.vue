<template>
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Notifications</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Notifications</a></li>
                <li class="breadcrumb-item active">Notifications</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Toastr</h6>
                    </div>
                    <div class="card-block buttons-demo">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success" data-toastr="success" data-message="Hello World"
                                        data-title="Success!">
                                    Success
                                </button>
                                <button class="btn btn-info" data-toastr="info" data-message="Hello World"
                                        data-title="Note!">
                                    Info
                                </button>
                                <button class="btn btn-danger" data-toastr="error" data-message="Hello World"
                                        data-title="Error!">
                                    Error
                                </button>
                                <button class="btn btn-warning" data-toastr="warning" data-message="Hello World"
                                        data-title="Warning!">
                                    Warning
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Notie.js</h6>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-success" data-notie="success" data-message="Hello World">
                                    Success
                                </button>
                                <button class="btn btn-info" data-notie="info" data-message="Hello World">
                                    Info
                                </button>
                                <button class="btn btn-danger" data-notie="error" data-message="Hello World">
                                    Error
                                </button>
                                <button class="btn btn-warning" data-notie="warning" data-message="Hello World">
                                    Warning
                                </button>
                                <button class="btn btn-primary" data-notie="confirm">
                                    Confirm
                                </button>
                                <button class="btn btn-outline-primary" data-notie="input">
                                    Input
                                </button>
                                <button class="btn btn-primary btn-rounded" data-notie="select">
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Easy Flash Notifications</h6>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Laraspace provides an easy way for your Laravel Application to handle notification alerts
                                    using any of the above plugins. Just call any of the functions mentioned below inside
                                    your controller method and you'll see the notification in the view.</p>

                                <p><code>flash()->success('You've Logged in Successfully.');</code></p>

                                <p><code>flash()->warning('There's something wrong.');</code></p>

                                <p><code>flash()->error('Validation Error');</code></p>

                                <p><code>flash()->info('Laraspace is Awesome!');</code></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/babel">
    export default {

        methods : {
            handleToastrNotifs(){
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "positionClass": "toast-top-right",
                    "onclick": null,
                    "showDuration": "1000",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                $('[data-toastr]').on('click',function(){
                    var type = $(this).data('toastr'),message = $(this).data('message'),title = $(this).data('title');
                    toastr[type](message, title);
                });
            },

            handleNotieNotifs(){

                $('[data-notie]').on('click',function(){
                    var type = $(this).data('notie'),message = $(this).data('message'),title = $(this).data('title');

                    switch(type) {
                        case 'success':
                            notie.alert(1, message); // Never hides unless clicked, or escape or enter is pressed
                            break;
                        case 'warning':
                            notie.alert(2, message);
                            break;
                        case 'info':
                            notie.alert(4, message);
                            break;
                        case 'error':
                            notie.alert(3, message);
                            break;
                        case 'confirm':
                            notie.confirm('Are you sure you want to do that?', 'Yes', 'Cancel', function() {
                                notie.alert(1, 'Good choice!', 2);
                            });
                            break;
                        case 'input':
                            notie.input({
                                type: 'password',
                                placeholder: 'Enter your password'
                            }, 'Please enter your password:', 'Submit', 'Cancel', function(valueEntered) {
                                notie.alert(1, 'You entered: ' + valueEntered, 2);
                            }, function(valueEntered) {
                                notie.alert(3, 'You cancelled with this value: ' + valueEntered, 2);
                            });
                            break;
                        case 'select':
                            notie.select('Demo item #1, owner is Jane Smith',
                                    [
                                        { title: 'Share' },
                                        { title: 'Open', color: '#57BF57' },
                                        { title: 'Edit', type: 2 },
                                        { title: 'Delete', type: 3 }
                                    ],
                                    function() {
                                        notie.alert(1, 'Share item!', 3);
                                    }, function() {
                                        notie.alert(1, 'Open item!', 3);
                                    }, function() {
                                        notie.alert(2, 'Edit item!', 3);
                                    }, function() {
                                        notie.alert(3, 'Delete item!', 3);
                                    });
                            break;

                        default:
                            notie.alert(1, 'Success!');
                    }
                });


            }
        },
        mounted: function () {

            this.handleToastrNotifs()
            this.handleNotieNotifs();
        }
    }
</script>