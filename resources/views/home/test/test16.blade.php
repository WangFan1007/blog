<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>

    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script>
        $(function() {
            $('#btn').click(function(params) {
                // alert('ok');
                $.ajax({
                    url: 'test17',
                    type: 'GET',
                    success: function(data) {
                        // alert(data)
                        var text = '<table>';
                        $.each(data, function(index, item) {
                            text += '<tr>';
                            text += '<td>';
                            text += item.m_name;
                            text += '</td>';
                            text += '</tr>';
                        })
                        text = text + '</table>';
                        $('#content').html(text);
                    }
                });
            });
        });
    </script>
</head>

<body>
    <button type="submit" id="btn">点击</button>
    <div id="content"></div>
</body>

</html> 