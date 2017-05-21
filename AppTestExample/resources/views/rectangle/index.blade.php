<html>
    <body>
        <h3>Rectangle Calculations</h3>
        <form action="{{url('rectangle')}}">
            <br/>Length <br/>
            <input type="text" name="length" id="length" value="{{$length}}"/>
            <br/>Breadth <br/>
            <input type="text" name="breadth" id="breadth" value="{{$breadth}}"/>
            <br/>
            <input type="submit" value="Submit"/>
        </form>
        Area is  <span id="area">{{$area}}</span>
        <br/>
        Perimeter is <span id="perimeter">{{$perimeter}}</span>

    </body>
</html>