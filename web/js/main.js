$( document ).ready( main );

var soundboard;

function main()
{
    soundboard = new Soundboard();
    soundboard.Init();
    soundboard.Load();
}