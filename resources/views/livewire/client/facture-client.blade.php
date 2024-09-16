<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Facture /</span> Mes Factures</h4>

    <!-- Search Input -->
    <div class="d-flex justify-content-end mb-4">
      <input
        type="text"
        id="searchInvoice"
        class="form-control w-25"
        placeholder="Rechercher une facture..."
      />
    </div>

    <!-- Invoice List Widget -->
    <div class="card mb-4">
      <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
          <div class="row gy-4 gy-sm-1">
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                <div>
                  <h3 class="mb-1">2</h3>
                  <p class="mb-0"> total Factures</p>
                </div>
                <span class="avatar me-lg-4">
                  <span class="avatar-initial bg-label-secondary rounded"
                    ><i class="ti ti-file-invoice ti-md"></i
                  ></span>
                </span>
              </div>
              <hr class="d-none d-sm-block d-lg-none" />
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                <div>
                  <h3 class="mb-1">$2.46k</h3>
                  <p class="mb-0">Total Payer</p>
                </div>
                <span class="avatar me-sm-4">
                  <span class="avatar-initial bg-label-secondary rounded"
                    ><i class="ti ti-checks ti-md"></i
                  ></span>
                </span>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h3 class="mb-1">$876</h3>
                  <p class="mb-0">total Impayer</p>
                </div>
                <span class="avatar">
                  <span class="avatar-initial bg-label-secondary rounded"
                    ><i class="ti ti-circle-off ti-md"></i
                  ></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Invoice List Table -->
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="invoice-list-table table border-top">
          <thead>
            <div class="d-flex align-items-center">
                <label class="me-2">Show</label>
                <select id="rowsPerPage" class="form-select w-auto">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </div>
            <tr>
              <th>#ID</th>
              <th>Total</th>
              <th class="text-truncate">Date d'émission</th>
              <th>Solde</th>
              <th>Statut de la Facture</th>
              <th class="cell-fit">Actions</th>
            </tr>
          </thead>
          <tbody id="invoiceTable">
            <!-- Dynamic rows will be inserted here by JavaScript -->
          </tbody>
        </table>
      </div>
      <!-- Pagination and Show Selector -->
      <div class="d-flex justify-content-between align-items-center mt-3">
        <div class="d-flex align-items-center">

        </div>
        <div>
          <button id="previousPage" class="btn btn-light btn-sm me-2">Previous</button>
          <button id="nextPage" class="btn btn-light btn-sm">Next</button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Content -->

  <script>
    // Données factices pour les factures du client
    const clientInvoices = [
      {
        id: 1,
        total: '$500',
        issuedDate: '2023-09-01',
        balance: '$0',
        status: 'Payée'
      },

      {
        id: 2,
        total: '$300',
        issuedDate: '2023-09-02',
        balance: '$300',
        status: 'Non Payée'
      },
      // Ajouter plus de données si nécessaire pour tester la pagination
    ];

    // Pagination variables
    let currentPage = 1;
    let rowsPerPage = 10;

    function renderTable(invoices) {
      const tableBody = document.getElementById('invoiceTable');
      tableBody.innerHTML = ''; // Vider les lignes existantes
      invoices.forEach((invoice) => {
        const row = `
          <tr>
            <td>${invoice.id}</td>
            <td>${invoice.total}</td>
            <td>${invoice.issuedDate}</td>
            <td>${invoice.balance}</td>
            <td>${invoice.status}</td>
            <td>
              <button class="btn btn-primary btn-sm" onclick="showInvoice(${invoice.id})">Voir</button>
            </td>
          </tr>
        `;
        tableBody.innerHTML += row;
      });
    }

    function updateTable() {
      const startIndex = (currentPage - 1) * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;
      const paginatedInvoices = clientInvoices.slice(startIndex, endIndex);
      renderTable(paginatedInvoices);
    }

    function handleRowsPerPageChange() {
      rowsPerPage = parseInt(this.value);
      currentPage = 1; // Reset to the first page
      updateTable();
    }

    function handlePagination(event) {
      if (event.target.id === 'nextPage' && (currentPage * rowsPerPage) < clientInvoices.length) {
        currentPage++;
        updateTable();
      } else if (event.target.id === 'previousPage' && currentPage > 1) {
        currentPage--;
        updateTable();
      }
    }

    // Fonction pour gérer la recherche de factures
    document.getElementById('searchInvoice').addEventListener('keyup', function() {
      const query = this.value.toLowerCase();
      const filteredInvoices = clientInvoices.filter((invoice) =>
        invoice.status.toLowerCase().includes(query)
      );
      renderTable(filteredInvoices);
    });

    // Fonction pour afficher les détails d'une facture
    function showInvoice(id) {
      const invoice = clientInvoices.find(inv => inv.id === id);
      alert(`Détails de la facture ${invoice.id}\nTotal: ${invoice.total}\nStatus: ${invoice.status}`);
    }

    // Initial render
    updateTable();

    // Event listeners for pagination and rows per page
    document.getElementById('previousPage').addEventListener('click', handlePagination);
    document.getElementById('nextPage').addEventListener('click', handlePagination);
    document.getElementById('rowsPerPage').addEventListener('change', handleRowsPerPageChange);
  </script>
