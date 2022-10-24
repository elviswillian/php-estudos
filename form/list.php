<?php include_once('includes/header.php'); ?>
<div class="card mt-3">
    <div class="card-header">
        Listar Funcionários
    </div>

    <div class="card-body">
        <table class="table table-stripped w-100 p-0 m-0">
            <thead>
                <tr>
                    <th width="10%"> Id </th>
                    <th width="25%"> Nome </th>
                    <th width="25%"> Cargo </th>
                    <th width="10%"> Salário </th>
                    <th width="30%"> Opções </th>
                </tr>
            </thead>

            <tbody>
                <?php 
                foreach ($_SESSION['employee'] as $key => $employee) {
                    echo "
                    <tr>
                        <td>{$key}</td>
                        <td>{$employee['name']}</td>
                        <td>{$employee['job']}</td>
                        <td>". $employee['salary'] ."</td> 
                        <td>
                            <a href='#' class='btn btn-primary'>Editar Funcionário</a>
                            <a href='deleteEmployee.php?key={$key}' class='btn btn-danger'>Excluir Funcionário</a>
                        </td>
                    </tr>
                    ";
                }
                    // a linha 27 é uma outra maneira de adicionar além do echo
                    //linha 30 para excluir um dado usando a chave key
                ?>
            </tbody>
        </table>
    </div>

    <div class="card-footer">

    </div>
</div>
<?php include_once('includes/footer.php'); ?>