<!DOCTYPE html>
<html>
    <head>
        <title>Autocomplete laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">
            var siteUrl = "{{url('/')}}";
        </script>
    </head>
    <body>
        <div class="container mt-4">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <h2>Autocomplete Caixa de texto do banco de dados usando jQuery ajax</h2>
                </div>
                <div class="card-body">
                    <form name="autocomplete-textbox" id="autocomplete-textbox" method="POST" action="#">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Buscar produto por nome</label>
                            <input type="text" id="name" class="form-control"/>
                        </div>
                    </form>
                </div>
            </div>
            <script src="{{asset('auto.js')}}"></script>
        </div>
    </body>
</html>