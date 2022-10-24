<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- css file -->
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}?v=1">
<link rel="stylesheet" href="{{url('css/dashboard.css')}}?v=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<title>@yield('pageTitle')</title>

</head>

<body>

<div class="wrapper">

    @include('templates.header')

    @yield('content')

    @include('templates.footer')

</div>

<script src="{{url('js/jquery-3.6.0.js?v=1')}}"></script>
<script src="{{url('js/bootstrap.min.js?v=1')}}"></script>
<script src="{{url('js/jquery.mask.min.js?v=1')}}"></script>

<script>
    $(document).ready(function(){
    
        var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
        $('.mask_telefone').mask(SPMaskBehavior, spOptions);
    
        $('.mask_data').mask('00/00/0000');    
    
        //Formata cpf e cnpj no mesmo campo
        var options = {
            onKeyPress: function (cpf, ev, el, op) {
                var masks = ['000.000.000-000', '00.000.000/0000-00'];
                $('.mask_cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
            }
        }
        $('.mask_cpfOuCnpj').length > 11 ? $('.mask_cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.mask_cpfOuCnpj').mask('000.000.000-00#', options);
    
    
    });
    </script>

@yield('footerscript')

</body>
</html>