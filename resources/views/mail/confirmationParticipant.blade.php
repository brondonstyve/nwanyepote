
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAil</title>
</head>

<body>

    <div>


        <table style="background-color:#444;width:100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="padding:20px;text-align:center;font-family:sans-serif;color:#fff;font-size:28px">
                        {{$detail['title']}}
                    </td>
                </tr>
            </tbody>
        </table>


        <table style="background-color:#eee;width:100%">
            <tbody>
                <tr>
                    <td align="center" style="padding:15px">


                        <table style="background-color:#fff;max-width:600px;width:100%;border:1px solid #ddd">
                            <tbody>
                                <tr>
                                    <td style="padding:15px;color:#333;font-size:16px;font-family:sans-serif">



                                        <p>Bonjour,</p>
                                        <p>Votre candidature de participation à été validé. vous pouvez maintenant actionner vos leviers pour être le futur vainqueur.</p>
                                        <p><a href=" {{route('admin-participant',$detail['id_event'])}}">Consultuer l'événement</a>
                                        
                                            <a href=" {{route('admin-participant',$detail['id_event'])}}">Et voir votre candidature </a></p>
                                        <p>-------------------------------------------------------------------------------</p>
                                        <p>Si vous n'êtes pas à l'origine de ce mail, bien vouloir l'ignorer</p>
                                        <p>Merci d'utiliser notre site!</p>
                                        <p>{{env('APP_NAME')}}</p>

                                        <hr>

                                        <p>
                                            <small>
                                    <a href="https://nwawyepote.com/" rel="nofollow noopener noreferrer nofollow noopener noreferrer" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://nwanyepote.com/&amp;source=gmail&amp;ust=1641478464356000&amp;usg=AOvVaw251Dn4DGxeXzy3xmQX4GmO">https://nwanyepote.com/</a><br>
                                    <br>
                                    
                                </small>
                                        </p>


                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>