<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <input type="file" id='inp1'>
        <div></div>
        <script>
            inp1.onchange = function () {

                    var file = this.files[0]   // 获取input上传的图片数据;

                    var img = new Image();
                    url = window.URL.createObjectURL(file)  // 得到bolb对象路径，可当成普通的文件路径一样使用，赋值给src;

                    img.src = url;
                    //其实也可一句代码搞定，不需要声明那么多变量；img.scr=window.URL.cteateObejectURL(this.files[0]) ;

                    //然后把img添加到页面就实现预览了
                    div.appendChild(img);
                }

        </script>
    </body>
</html>