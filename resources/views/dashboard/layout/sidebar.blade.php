<div class="sidebar fixed-top d-flex flex-column flex-shrink-0 px-3 pb-4 border-end justify-content-between h-100">
    <div>
        <a href="/" class="d-flex align-items-center justify-content-center py-4 my-2 text-dark text-decoration-none">
            <img height="34" src="https://help.sendinblue.com/hc/article_attachments/6450414165138/Zendesk-Logo.png" alt="">
        </a>

        {{-- <div class="d-flex border rounded ps-2 pe-3 py-1 mb-4 align-items-center justify-content-between">
            <div class="d-flex align-items-center column-gap-2">
                <img width="34" src="https://z-p3-scontent.ftng2-1.fna.fbcdn.net/v/t39.30808-1/299967793_983191415878394_8246902647492754673_n.png?stp=cp0_dst-png_p68x68&_nc_cat=110&ccb=1-7&_nc_sid=3170a5&_nc_eui2=AeG8CQaxEKd2azm8pxzjtdFfhm2c3LJhNSKGbZzcsmE1ItN8eN1mE30h_67huo1nTv4K1XE1RlO6k0BT3OoH2yB7&_nc_ohc=HJ-qf_AxazoAX_b7COs&_nc_ht=z-p3-scontent.ftng2-1.fna&oh=00_AfDmaT0vrkgA_eu4LhXZ-F1OTuVciLdQIGhSJABVEXpMyw&oe=6450ED57" alt="">
                <h6 class="mb-0">Ayoub Marghad</h6>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
        </div> --}}
        {{-- <div class="input-group shadow-sm mb-4">
            <span class="input-group-text bg-white border-end-0" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div> --}}
        <span class="text-uppercase fw-semibold px-2 mb-2 fs-8 text-secondary">Génerale</span>
        <ul class="nav nav-pills flex-column row-gap-2 mb-4">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.index') ? 'text-primary active' : 'text-dark' }}">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"></path>
                    </svg>
                    Overview
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.tickets.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z"></path>
                    </svg>
                    Tickets
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.clients.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                    </svg>
                    Clients
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.solutions.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                    </svg>
                    Solutions
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.groupes.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                    </svg>
                    Equipe de travail
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.reports.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                    </svg>
                    Analyses
                </a>
            </li>
        </ul>
        <span class="text-uppercase fw-semibold px-2 mb-2 fs-8 text-secondary">Paramètres</span>
        <ul class="nav nav-pills flex-column row-gap-2 mb-auto mb-4">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.roles.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg height="24" width="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                    </svg>
                    Rôles
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.calendars.*') ? 'text-primary active' : 'text-dark' }}">
                    <svg height="24" width="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Horaire de travail
                </a>
            </li>
        </ul>
    </div>
    <div>
        <hr class="mb-3 mt-0 mx-2">
        <a href="#" class="nav-link px-2 rounded-3 fw-semibold d-flex column-gap-3 align-items-center text-decoration-none {{ request()->routeIs('dashboard.calendars.*') ? 'text-primary active' : 'text-dark' }}">
            <svg width="24" height="24" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
            </svg>
            Collapse sidebar
        </a>
    </div>
</div>