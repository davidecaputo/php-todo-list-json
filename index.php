<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
</head>
<body class="bg-black">
    <div id="app">
        <div class="container p-5">
            <h1 class="text-center text-uppercase text-white">Lista cose da fare</h1>
            <div class="text-center py-4 text-white">
                <div>
                    <label class="form-label fs-4 w-50 pb-2">Scrivi qui cosa devi fare e clicca il bottone per aggiungerlo alla lista</label>
                </div>
                <input type="text" class="form-control w-50 d-inline-block me-4" name="element" id="element" v-model="newElement" @keyup.enter="addElement">
                <button class="btn btn-primary" @click="addElement">Inserisci</button>
            </div>
            <div class="d-flex justify-content-center">
              <ul class="list-group w-50 pt-4">
                <li class="list-group-item d-flex justify-content-between align-items-center" v-for="(element, index) in list" :key="index">
                  <span class="w-100 h-100 fs-4">{{element.itemList}}</span>
                  <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                </li>
              </ul>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>