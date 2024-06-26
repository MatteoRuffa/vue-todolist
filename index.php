<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/myscript.js" type="module"></script>
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app" class="mx-auto my-5">
        <h1 class="text-center mb-3 ">Er segreto per un'ottima Carbonara</h1>
        <div class="container ">
            <h4>Puoi segnare come fatte le azioni compiute cliccando sulla scritta o eliminarle dalla lista cliccando sull'icona
                del cestino</h4>
            <ul class="list-group my-4">
                <li class="d-flex justify-content-between" v-for="(item, index) in carbonara" :key="item.id">
                    <span :class="{'text-decoration-line-through' : item.done}" class="pointer"
                        @click="toggleLineThrough(item.id)">
                        {{item.text}}
                    </span>
                    <i class="fa-solid fa-trash-can" @click="removeById(item.id)"></i>
                </li>
            </ul>
            <div>
                <label for="newAction">Aggiungi un'azione</label>
                <input type="text" class="form-control" id="newAction" v-model="newAction" name="newAction" @keyup.enter="addAction">
                <button class="btn btn-danger  my-2" @click="addAction">Aggiungi</button>

            </div>
        </div>

    </div>

</body>

</html>