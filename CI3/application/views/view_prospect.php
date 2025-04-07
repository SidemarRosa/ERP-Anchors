    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Empresas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Empresa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CNPJ</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data de Criação</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Tech Solutions</h6>
                            <p class="text-xs text-secondary mb-0">contact@techsolutions.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">12.345.678/0001-99</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">contact@techsolutions.com</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Ativa</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">01/02/2010</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="https://wa.me/123456789" class="btn btn-success" target="_blank">
                          <i class="fa-brands fa-whatsapp"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Web Innovators</h6>
                            <p class="text-xs text-secondary mb-0">support@webinnovators.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">23.456.789/0001-88</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">support@webinnovators.com</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Inativa</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">15/08/2015</span>
                      </td>
                      <td class="align-middle">
                        <a href="https://wa.me/987654321" class="btn btn-success btn-sm" target="_blank">
                          Contato no WhatsApp
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Global Industries</h6>
                            <p class="text-xs text-secondary mb-0">info@globalindustries.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">34.567.890/0001-22</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">info@globalindustries.com</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-warning">Pendente</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">12/05/2018</span>
                      </td>
                      <td class="align-middle">
                        <a href="https://wa.me/1122334455" class="btn btn-success btn-sm" target="_blank">
                          Contato no WhatsApp
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Contatos</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-3">
                <table class="table table-hover align-items-center text-nowrap">
                  <thead class="thead-light">
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome fantasia</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CNPJ</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Data de Contato</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Próximo Contato</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Responsável</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data de Criação</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $conn = new mysqli("localhost", "root", "", "anchors");

                    if ($conn->connect_error) {
                      die("Conexão falhou: " . $conn->connect_error);
                    }

                    $sql = "SELECT nome_fantasia, cnpj, data_contato, proximo_contato, responsavel, status, criado_em FROM contatos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                  <td class='px-3'>" . $row["nome_fantasia"] . "</td>
                  <td class='px-3'>" . $row["cnpj"] . "</td>
                  <td class='text-center px-3'>" . $row["data_contato"] . "</td>
                  <td class='text-center px-3'>" . $row["proximo_contato"] . "</td>
                  <td class='px-3'>" . $row["responsavel"] . "</td>
                  <td class='text-center px-3'>
                    <span class='badge badge-sm bg-gradient-" . ($row["status"] == 'Pendente' ? "warning" : "success") . "'>" . $row["status"] . "</span>
                  </td>
                  <td class='text-center px-3'>
                    <span class='text-secondary text-xs font-weight-bold'>" . $row["criado_em"] . "</span>
                  </td>
                </tr>";
                      }
                    } else {
                      echo "<tr><td colspan='7' class='text-center'>Nenhum contato encontrado</td></tr>";
                    }

                    $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>

</html>