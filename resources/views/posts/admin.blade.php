
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width,
						initial-scale=1.0">
        <title>Real Estate Sale</title>
        <link rel="stylesheet"
              href="{{asset('css/style2.css')}}">
    </head>

    <body>
    <header>
        <h1 class="heading">Real Estate Sale</h1>
        <h3 class="title">Info about Home</h3>
    </header>


    <div class="container">

        <div class="slider"></div>
        <div class="btn">
            <button class="login">Fill This Form</button>
        </div>
        <form  action="{{url('post')}}" method="post" enctype="multipart/form-data" >
            @csrf
        @method('POST')
        <div class="form-section">
            <div class="signup-box">
                <input type="text" name="location"
                       class="name ele" id ="location"
                       placeholder="location">
                <input type="text" name="roomnumber"
                       class="email ele" id="roomnumber"
                       placeholder="roomnumber">
                <input type="number" name="price "
                       class="password ele" id ="price"
                       placeholder="price">
                <input type="textarea" name="description"
                       class="password ele" id ="description"
                       placeholder="description">

                <input type="file" name="url"
                       class="password ele" id ="url"
                       placeholder="Upload image">

                <button class="clkbtn" name="submit">Submit</button>
            </div>
        </div>
    </div>
    <script src="{{asset('main.js')}}"></script>
    </body>

    </html>
