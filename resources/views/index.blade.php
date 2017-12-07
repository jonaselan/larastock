<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de estoque</title>
  </head>
  <body>
    <div class="container">
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach($products as $p)
          <tr>
            <td>{{ $p->name }} </td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->value }}</td>
            <td>{{ $p->count }}</td>
            <td>
              <a href="/produtos/mostra">
                <span class="glyphicon glyphicon-search"></span>
              </a>
            </td>
          </tr>
        @endforeach
    </table>
    </div>
    </table>
  </body>
</html>
