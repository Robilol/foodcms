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
                }
            }
        });

        console.log(tags_array);
    }

    CKEDITOR.replace( 'text' );

    $(document).ready(function () {
        console.log("ready");


        $('#text').keyup(function() {
            var nombreMots = jQuery.trim($(this).val()).split(' ').length;
            if($(this).val() === '') {
                nombreMots = 0;
            }
            console.log(nombreMots);
        })

    });
</script>
