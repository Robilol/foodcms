<header>
    <h1 id="titre">Article</h1>
</header>
<section id="content">
    <?php $this->includeModal("form", Article::getArticleCreationForm()); ?>
    <button onclick="generateTags()">Générer les ingrédients</button>
    <div class="tags-list">

    </div>
</section>

<script>

    function generateTags() {
        var tags_array = [];

        console.log("bla");

        $.ajax({
            url: "/admin/article/getTags",
            dataType: "JSON",
            success: function (json) {
                console.log(json);
                for(var i=0;i<json.length;i++){
                    tags_array.push(json[i]);
                    $(".tags-list").append("<div class='tag' data-id='"+json[i].id+"'>"+json[i].name+"</div>")
                }
            }
    });

    }

    CKEDITOR.replace( 'text' );

    $(document).ready(function(){

        $('.tag').live('click', function(e) {
            console.log("bla");
            $(this).remove();
        });
    });
</script>