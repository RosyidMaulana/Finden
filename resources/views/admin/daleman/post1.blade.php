@extends('admin.main')

@section('admin')

<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>BODY COPY</h2>
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">My Post</h1>
                        </div>
                        <div class="table-responsive col-lg-9">

                            <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                            </table>
                        </div>
                </div>
                <div class="body">
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit. Aenean commodo ligula eget
                        dolor. Aenean massa.
                    </p>
                    <p>
                        Donec pede justo, fringilla vel, aliquet
                        nec, vulputate eget, arcu. In enim justo,
                        rhoncus ut, imperdiet a, venenatis vitae,
                        justo. Nullam dictum felis eu pede mollis
                        pretium. Integer tincidunt. Cras dapibus.
                        Vivamus elementum semper nisi. Aenean
                        vulputate eleifend tellus. Aenean leo
                        ligula, porttitor eu, consequat vitae,
                        eleifend ac, enim. Aliquam lorem ante,
                        dapibus in, viverra quis, feugiat a, tellus.
                        Phasellus viverra nulla ut metus varius
                        laoreet. Quisque rutrum. Aenean imperdiet.
                        Etiam ultricies nisi vel augue. Curabitur
                        ullamcorper ultricies nisi. Nam eget dui.
                        Etiam rhoncus. Maecenas tempus, tellus eget
                    </p>
                    <p>
                        Nam quam nunc, blandit vel, luctus pulvinar,
                        hendrerit id, lorem. Maecenas nec odio et
                        ante tincidunt tempus. Donec vitae sapien ut
                        libero venenatis faucibus. Nullam quis ante.
                        Etiam sit amet orci eget eros faucibus
                        tincidunt. Duis leo. Sed fringilla mauris
                        sit amet nibh. Donec sodales sagittis magna.
                        Sed consequat, leo eget bibendum sodales,
                        augue velit cursus nunc.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
