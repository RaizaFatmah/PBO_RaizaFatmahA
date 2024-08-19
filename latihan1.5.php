<?php
class shape
{
    function draw()
    {
    }
}

class circle extends shape
{
    function draw()
    {
        print "circle has been draw.</br>";
    }
}
class triangle extends shape
{
    function draw()
    {
        print "Triangle has been drawn.</br>";
    }
}
class ellipse extends shape
{
    function draw()
    {
        print "ellipse has been drawn.";
    }
}
?>