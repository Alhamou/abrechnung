
<?php ?>
<div class="container">
  <div class="bg addform col-lg-8 offset-lg-2">
    <div class="container">
      <!-- Custom styles for this template -->
      <link href="./partials/css/all.min.css" rel="stylesheet" />

      <div class="container">
        <div class="py-5 text-center">
          <h4><i class="fas fa-chart-line"></i> Kundenabrechnung</h4>

          <p class="lead">
            Beleg im Agenturgeschäft, der dazu dient, die in einer
            Regulierungsanforderungsliste erfaßten Forderungen oder
            Verbindlichkeiten gegenüber einem Debitor abzurechnen.
          </p>
        </div>

        <div class="row">
          <div class="col-md-12 order-md-1">
            <h4 class="mb-3"><i class="fas fa-info-circle"></i> Kunden Informationen</h4>
            <form action="server/add.php" name="abrechnung" method="POST" class="needs-validation" novalidate>
              
            

           <div class="row ">
           <div class="col-2">
            <input type="radio" name="geschlecht" id="herr" value="Herr" checked>
            <label for="herr">
            Herr
            </label>
            </div>
            
            &nbsp;&nbsp;&nbsp;


            <div class="col-2">
            <input type="radio" name="geschlecht" id="frau" value="Frau">
            <label for="frau">
            Frau
            </label>
            </div>
           </div>
          
            
              <br /><br />



              <div class="mb-3">
                <label for="address">Kunden Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  placeholder="vor name und nach name"
                  required
                  name="kundname"
                />
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>



              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="straße">Straße <span class="text-muted">(Wahlweise)</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="straße"
                    placeholder=""
                    value=""
                    required
                    name="straße"
                  />
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="statdt">Stadt</label>
                  <input
                    type="text"
                    class="form-control"
                    id="statdt"
                    placeholder=""
                    value=""
                    required
                    name="stadt"
                  />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="plz">PLZ</label>
                  <input
                    type="number"
                    class="form-control"
                    id="plz"
                    placeholder=""
                    value=""
                    required
                    name="plz"
                  />
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

              </div>

                <div class="row">
                <div class=" col-md-6 mb-3">
                <label for="kundnumer">Kunden Nummer</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nr.</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="kundnumer"
                    placeholder="0"
                    required
                    name="kundnumer"
                  />
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>

              <div class="col-md-6  mb-3">
                <label for="steuernumer">Steuer Nummer</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nr.</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="steuernumer"
                    placeholder="0"
                    required
                    name="steuernumer"
                  />
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>
                </div>





              <!-- Rechnung Informationen -->
                <br>
              <h4 class="mb-3"><i class="fas fa-info-circle"></i> Rechnung Informationen</h4>

              <div class="mb-3">
                <label for="rechnungnummer"
                  >Rechnung Nummer <span class="text-muted">(Wahlweise)</span></label
                >
                <input
                  type="number"
                  class="form-control"
                  id="rechnungnummer"
                  placeholder="0.0.0.0.0"
                  name="rechnungnumer"
                />
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="mb-3">
                <label for="address">Datum</label>
                <input
                  type="date"
                  class="form-control"
                  id="address"
                  placeholder="1234 Main St"
                  required
                  name="datum"
                />
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="mb-3">
                <label for="address2"
                  >Article Name<span class="text-muted">(Optional)</span></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="address2"
                  placeholder="..."
                  name="article"
                />
              </div>


              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="cc-expiration">Mange</label>
                  <input
                    type="number"
                    class="form-control"
                    id="cc-expiration"
                    placeholder=""
                    required
                    name="mange"
                  />
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="cc-cvv">Einzelpreise<span class="text-muted"> (brutto)</span></label>
                  <input
                    type="number"
                    class="form-control"
                    id="cc-cvv"
                    placeholder=""
                    required
                    name="einzelpreise"
                  />
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="cc-cvv">Rabat<span class="text-muted"> (brutto)</span></label>
                  <input
                    type="number"
                    class="form-control"
                    id="cc-cvv"
                    placeholder=""
                    required
                    name="rabat"
                  />
                  <div class="invalid-feedback">
                    Security code required
                  </div>

                
                </div>

                


              </div>

              <div class="mb-3">
                <label for="address">Article Beschreibung</label>
                <textarea
                  type="date"
                  class="form-control"
                  id="address"
                  placeholder="Beschreibung..."
                  required
                  name="beschreibung"
                ></textarea>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              
              
              <button class="btn btn-primary btn-lg btn-block" type="submit">
              <i class="fas fa-paper-plane"></i> Herunterladen PDF und speichern
              </button>
            </form>
          </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">

        <hr class="mb-4" />
          <p class="mb-1">&copy; 2017-2019 Company Name</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </footer>
      </div>
    </div>
  </div>
</div>
