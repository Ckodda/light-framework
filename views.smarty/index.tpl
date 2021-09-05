<!doctype html>
<html>

<head>
    <!-- ... -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {include file="components/header.tpl"}
</head>

<body>
    <section class="flex justify-center items-center  w-full h-screen">
        <div>

            <h1 class="text-3xl p-2 md:text-5xl my-5 w-full text-center font-mono shadow-lg rounded-full">LIGHT FRAMEWORK</h1>
            <h2 class="md:text-2xl p-5 sm:p-2 text-center">{$mensaje}</h2>
            <div class="mt-5 flex gap-5 justify-center items-center">
                <div class="flex-col gap-10 flex md:flex-row">
                <figure>
                    <img src="{$URL}src/img/smarty.png">
                </figure>
                <figure>
                    <img src="{$URL}src/img/tailwind.svg" class="w-48">
                </figure>
                </div>
            </div>
        </div>
    </section>



</body>
{include file="components/footer.tpl"}

</html>