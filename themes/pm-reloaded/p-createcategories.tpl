<head>
    <title>{$l_panel} - {$l_createcategory} | {$title}</title>
</head>
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <div class="mb-4">
                <h1 class="display-4">{$l_createcategory}</h1>
                {if isset($success)}
                    <script>
                    Swal.fire({
                    icon: 'success',
                    title: "{$l_success}",
                    text: "{$success}!",
                    showConfirmButton: false,
                    footer: '<a href="{$link}/panel/categories/articles" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                {if isset($error)}
                    <script>
                    Swal.fire({
                    icon: 'error',
                    title: "{$l_error}",
                    text: "{$error}!",
                    showConfirmButton: false,
                    footer: '<a href="{$link}/panel/categories/articles" class="btn btn-primary">{$l_ok}</a>',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                    </script>
                {/if}
                <form method="POST">
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" name="category_name" id="category_name" class="form-control" required/>
                            <label for="category_name">{$l_name}</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" name="category_tag" id="category_tag" class="form-control" required/>
                            <label for="category_tag">{$l_tag}</label>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="{$l_publish}" />
                </form>
            </div>
        </div>
    </div>
</section>