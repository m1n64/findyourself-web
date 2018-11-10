# Веб-сайт "Найди себя"

Последняя версия: [1.6](https://drive.google.com/drive/folders/1NNLjt-He70rL2I_snYnMVcNUR1bbJAjb "1.6")
Ссылка на **Google Drive**: [drive.google](https://drive.google.com/drive/folders/1BgcGTCJqrJJ_PbVH4EhBuQ3eXZiHzXXq "drive.google")

###### ГЛАВНЫМ ДОСТИЖЕНИЕМ СТАЛО ПЕРЕХОД НА SASS.
```sass
$mr-v: 10px;
$color: #bdbdbd;

@mixin padding($p){
    padding: $p;
}

.version 
{
    color: $color;
    margin-right: $mr-v;
}

.changelog
{
   .version
    {
        color: #0F0F0F;
        font-size: 30px;
    }
    
    .fix-version
    {
        ul
        {
            list-style: circle;
            padding-left: 20px;
        }
    }
    
    .is-alpha
    {
        color: #FF4649;
//        @extend .version;
    }
    
    border: #C6ECFF solid 1px;
    border-radius: 20px;
    @include padding($mr-v);
            
}

.download-button
{
    margin-top: 1%;
}
```
