@extends('layouts.main')
@section('content')
    <!-- MAIN -->
    <main class="site-main">
        <div class="columns container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-md-12  col-main">
                    <div class="row bleach">
                        <h1 class="page-title">
                            {{$rules->pageName}}
                        </h1>
                        <?php echo $rules->pageText?>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop