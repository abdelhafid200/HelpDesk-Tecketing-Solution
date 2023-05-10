@include('dashboard.horaire.headerTemporer')


<div class="consultAgent">
    <div class="titleAgent">
        <div class="agen_titre">
            <h3>Agente</h3>
        </div>
        <div class="addAgent">
            <a href="http://" class="new_agent">Ajouter Agente</a>
        </div>

    </div>
    <div>
        <div class="row g-2">
            <div class="col-md-4">
                <div class="input-group search-agent">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control input-search" placeholder="Chercher pour un agent" aria-label="Input group example" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>

    <div class="support-agent">
        <span>Support Agente <span>3</span></span>
    </div>
    <div class="ligne-agent">
        <hr>
    </div>

    <div class="trier">
        <div>
            Trier par :
            <div class="col-sm-6">
                <select class="form-select form-control " >
                    <option value="1" selected>nom</option>
                    <option value="2">dérniére ajoute</option>
                    <option value="3">date de création</option>
                </select>
            </div>
        </div>
        <div>
            <span>
                All Agents
            </span>
        </div>
    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th >Name</th>
                <th>Roles</th>
                <th>Groupes</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>khalil@gmail.com</th>
                <td>Administrator +1 </td>
                <td>- -</td>
            </tr>



            </tbody>
        </table>
    </div>


</div>
