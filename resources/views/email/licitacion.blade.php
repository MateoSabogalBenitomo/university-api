<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #b70e0e; color: #74787e; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">
    <style>
        @media  only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media  only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
        <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #b70e0e; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;"><tr>
            <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
        <table class="content" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <tr>
            <td class="header" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
                <a href="https://clientes.andinaseguridad.com.co" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #fbfdff; font-size: 19px; font-weight: bold; text-decoration: none; text-shadow: 0 1px 0 #ffffff;">
                    Andina Seguridad del Valle LTDA
                </a>
            </td>
        </tr>
        <tr>
            <td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #ffffff; border-bottom: 1px solid #edeff2; border-top: 1px solid #edeff2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                <table class="inner-body" align="center" width="1000" cellpadding="0" cellspacing="0" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #ffffff; margin: 0 auto; padding: 0; width: 1000px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 1000px;">
                        <tr>
                            <td class="content-cell" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
                                <h1 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left;">Señor(a) {{$cliente}}:</h1>

                                <br>
                                <h1 style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left;">Los siguientes documentos fueron cargados a la licitación {{$licitacion}} :</h1>
                                        <p style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">
                                        </p>
                                        <hr>
                                            <div class="table" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                <table style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                                                    <thead style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;"><tr>
                                                        <th style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; border-bottom: 1px solid #edeff2; padding-bottom: 8px; text-align: center;">Nombre del Documento</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                        @foreach($documentos as $dc)
                                                        {{-- @php
                                                           dd($dc['nombre_archivo'])
                                                       @endphp --}}
                                                       <tr>
                                                           <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787e; font-size: 15px; line-height: 18px; padding: 10px 0; text-align: center;">{{$dc['nombre_archivo']}}</td>

                                                       </tr>
                                                       @endforeach

                                                    </tbody>
                                                </table>
                                            </div>

                                            <div>

                                    </div>
                            </td>
                        </tr>



                </table>
            </td>
        </tr>
    </body>
</html>
