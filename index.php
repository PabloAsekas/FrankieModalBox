<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        body {
            font: normal 12px/18px 'Lucida Grande', 'Ubuntu', Tahoma, Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-shadow: 0 1px 1px rgba(255,255,255,1);
            background: rgba(231,235,242,1);
        }

        a, a:visited {
            color: rgba(59,89,152,1);
            text-decoration: none;
        }

        ul, li, h1, h2 {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .wrapper {
            text-align: center;
            width: 480px;
            margin: 20px auto;
        }

        h1 {
            font-weight: bold;
            font-size: 12px;
        }

        h2 {
            font-weight: normal;
            font-size: 12px;
            color: rgba(150,150,150,1);
        }

        h3 {
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid rgba(59,89,152,1);
            margin: 10px 0;
            padding: 10px 0;
        }

        #test, #test-2, #test-3 {
            color: rgba(80,80,80,1);
            width: 550px;
            padding: 20px;
            display: none;
            background: rgba(255,255,255,1);
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,1);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,1);
            box-shadow: 0 1px 2px rgba(0,0,0,1);
        }

        .content {
            font-size: 11px;
            padding: 10px;
        }

        #test > p, #test-2 > p, #test-3 > p {
            margin: 0;
        }

        #test > h2, #test-2 > h2, #test-3 > h2 {
            margin: 0 0 10px 0;
            padding: 0 0 10px 0;
            text-align: center;
            border-bottom: 1px solid rgba(234,234,234,1);
        }

        #test p img, #test-2 p img, #test-3 p img {
            max-width: 100%;
            max-height: auto;
        }

        #close-button {
            width: 12px;
            height: 12px;
            margin: -5px 0 0 545px;
            position: absolute;
            cursor: pointer;
            opacity: 1;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAZklEQVQoz5WQQQrAIAwExyeICJEeCh76/yf20tAgWWkXBEl2ErLwqgONXAZUFvP1vJaYvVcBCnCEYoRsqZtPyaBTmXeQNEdoJpukTGxoX8xzB2VpyPQKMMSBK9RjY4g0HOr8UPHPDVJDCheP4tTFAAAAAElFTkSuQmCC);
        }

        #close-button-2 {
            padding: 7px 10px;
            display: block;
            background: rgba(59,99,169,1);
            color: white;
            text-shadow: 0 1px 1px rgba(59,89,160,1);
            width: 100px;
            margin: 0 auto;
            margin-top: 15px;
            text-align: center;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
            box-shadow: 0 1px 2px rgba(0,0,0,.2);
        }

    </style>

</head>
<body>

    <section class="wrapper">

        <section class="content">

            <h3>Demo</h3>

            <strong>Demo 1 - <a href="#test" id="simple-test-link">Simple</a></strong><br />
            <strong>Demo 2 - <a href="#test-2" id="wclosebutton-test">With close button</a> - <a href="#test-3" id="wclosebutton-test-2">With close button 2</a></strong>

            <div id="test">
                <h2>Announcement</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
            </div>
            <div id="test-2">
                <div id="close-button"></div>
                <h2>Announcement 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p><img src="https://cdn.macsfera.com/wp-content/uploads/2017/11/06171233/Opinion-iPhone-X.jpg" /></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
            </div>
            <div id="test-3">
                <h2>Announcement 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero purus, convallis nec vestibulum eget, luctus vitae purus. Vestibulum non mauris et sem vulputate pellentesque ac a turpis. Ut vel lacus vitae justo vestibulum lobortis. Nunc ipsum ipsum, laoreet id dictum nec, fermentum vel purus. Maecenas nisl felis, faucibus non rutrum eu, sollicitudin sed ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dignissim lacinia tempus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. Nulla accumsan pellentesque velit, a malesuada diam tristique a. Fusce eleifend magna erat, et imperdiet orci. Quisque sapien mauris, malesuada eu tristique pulvinar, placerat id ligula. Vivamus vitae viverra nulla. Donec eget turpis vel erat malesuada sodales.</p>
                <a href="javascript:;" id="close-button-2">Close</a>
            </div>
        </section>

    </section>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="jquery.frankieModalBox.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#simple-test-link').frankieModal();
            $('#wclosebutton-test').frankieModal({closeButton:'#close-button'});
            $('#wclosebutton-test-2').frankieModal({closeButton:'#close-button-2'});
        });
    </script>

</body>
</html>
