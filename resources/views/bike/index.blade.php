<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Bicicletas</h1>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Borrar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tr>
                    <td>1</td>
                    <td>Bicicleta1</td>
                    <td>16€</td>
                    <td><form action="{{ url('bike/' . 1) }}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Borrar"/>
                        </form></td>
                    <td><form action="{{ url('bike/' . 1 . '/edit') }}" method="get">
                        <input type="submit" value="Editar"/>
                    </form></td>
                    <td> <form action="{{ url('show/' . 1) }}" method="get">
                        <input type="submit" value="Ver"/>
                    </form></td>
            </tr>
            <tr>
                    <td>2</td>
                    <td>Bicicleta2</td>
                    <td>100€</td>
                    <td><form action="{{ url('bike/' . 2) }}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Borrar"/>
                        </form></td>
                    <td><form action="{{ url('bike/' . 2 . '/edit') }}" method="get">
                        <input type="submit" value="Editar"/>
                    </form></td>
                    <td> <form action="{{ url('show/' . 2) }}" method="get">
                        <input type="submit" value="Ver"/>
                    </form></td>
            </tr>
            <tr>
                    <td>3</td>
                    <td>Bicicleta3</td>
                    <td>50€</td>
                    <td><form action="{{ url('bike/' . 3) }}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Borrar"/>
                        </form></td>
                    <td><form action="{{ url('bike/' . 3 . '/edit') }}" method="get">
                        <input type="submit" value="Editar"/>
                    </form></td>
                    <td> <form action="{{ url('show/' . 3) }}" method="get">
                        <input type="submit" value="Ver"/>
                    </form></td>
            </tr>
        </table>
    </div>
    
    <form action="{{ url('bike/create') }}" method="get">
        <input type="submit" value="Agregar"/>
    </form>
    
</body>
</html>