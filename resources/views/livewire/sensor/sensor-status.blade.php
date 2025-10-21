<style>
    /* ---------------------------------- */
    /* Paleta de Cores e Estilos Base    */
    /* ---------------------------------- */
    :root {
        --primary-color: #4a90e2;  /* Azul mais vibrante */
        --secondary-color: #89c994; /* Verde suave para ON */
        --danger-color: #f08080;   /* Vermelho suave para OFF */
        --text-color: #444;
        --bg-color-light: #f8f9fa; /* Fundo mais claro */
        --bg-color-dark: #e9ecef;  /* Fundo da tabela e alternado */
        --shadow-light: 0 4px 12px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 8px 16px rgba(0, 0, 0, 0.12);
        --card-bg: #fff;
    }

    body {
        background-color: var(--bg-color-light);
        font-family: 'Segoe UI', 'Roboto', 'Arial', sans-serif;
        color: var(--text-color);
        margin: 0;
        padding: 40px;
        line-height: 1.6;
    }

    .container {
        max-width: 960px;
        margin: 0 auto;
    }

    /* ---------------------------------- */
    /* Estilização do card              */
    /* ---------------------------------- */
    .card {
        background-color: var(--card-bg);
        border-radius: 12px;
        box-shadow: var(--shadow-light);
        padding: 30px;
        transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: var(--shadow-hover);
        transform: translateY(-3px);
    }

    .card-header {
        background-color: transparent;
        border-bottom: none;
        text-align: center;
        margin-bottom: 25px;
    }

    .card-header h2 {
        font-size: 2.2rem;
        color: var(--primary-color);
        font-weight: 600;
        position: relative;
        padding-bottom: 12px;
    }

    .card-header h2::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 70px;
        height: 3px;
        background-color: var(--primary-color);
        border-radius: 2px;
    }

    /* ---------------------------------- */
    /* Estilização da barra de pesquisa */
    /* ---------------------------------- */
    .search-bar-container {
        position: relative;
        width: 60%;
        max-width: 400px;
        margin: 0 auto 30px;
    }

    .search-input {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 1px solid #ddd;
        border-radius: 30px;
        background-color: var(--card-bg);
        font-size: 1rem;
        transition: all 0.3s ease;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
    }

    .search-input:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
    }

    .search-icon {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary-color);
        pointer-events: none;
        font-size: 1.1rem;
    }

    /* ---------------------------------- */
    /* Estilização da tabela            */
    /* ---------------------------------- */
    .table {
        background-color: var(--bg-color-light);
        border-radius: 12px;
        overflow: hidden;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        animation: fadeIn 1s ease-in-out;
        box-shadow: var(--shadow-light);
    }

    .table thead tr {
        background-color: var(--primary-color);
        color: #fff;
    }

    .table th, .table td {
        padding: 15px;
        text-align: center;
        border: none;
        vertical-align: middle;
    }

    .table tbody tr:nth-child(even) {
        background-color: var(--bg-color-dark);
    }

    .table tbody tr:hover {
        background-color: #dbe9f5;
        cursor: pointer;
    }

    /* ---------------------------------- */
    /* Efeitos de animação              */
    /* ---------------------------------- */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* ---------------------------------- */
    /* Estilos do Toggle Switch         */
    /* ---------------------------------- */
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 100px; /* Largura maior para o texto completo */
        height: 38px;
        margin: 0;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--danger-color);
        transition: .4s;
        border-radius: 19px; /* Arredondado perfeito */
    }

    .toggle-switch input:checked + .slider {
        background-color: var(--secondary-color);
    }

    .toggle-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        text-align: center;
        pointer-events: none;
        font-size: 13px;
        font-weight: bold;
        color: #fff;
        transition: opacity 0.4s;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px; /* Espaçamento entre o ícone e o texto */
    }

    .toggle-text .text-on,
    .toggle-text .text-off {
        display: none;
    }

    .toggle-switch input:not(:checked) ~ .toggle-text .text-off {
        display: flex;
        opacity: 1;
    }

    .toggle-switch input:checked ~ .toggle-text .text-on {
        display: flex;
        opacity: 1;
    }

    .toggle-text .text-off,
    .toggle-text .text-on {
        transition: opacity 0.4s;
    }
   
    /* ---------------------------------- */
    /* Estilos para a mensagem de sucesso */
    /* ---------------------------------- */
    .flash-message {
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--secondary-color);
        color: #fff;
        padding: 15px 30px;
        border-radius: 10px;
        box-shadow: var(--shadow-light);
        z-index: 1000;
        opacity: 0;
        animation: slideInAndOut 3.5s ease-in-out forwards;
        font-size: 1rem;
    }

    @keyframes slideInAndOut {
        0% { opacity: 0; transform: translate(-50%, -50px); }
        10% { opacity: 1; transform: translate(-50%, 0); }
        90% { opacity: 1; transform: translate(-50%, 0); }
        100% { opacity: 0; transform: translate(-50%, -50px); }
    }

    /* ---------------------------------- */
    /* Placeholder para itens não encontrados */
    /* ---------------------------------- */
    .text-center {
        color: var(--primary-color);
        font-weight: 500;
        padding: 20px;
    }

</style>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Status dos Sensores</h2>
        </div>
        <div class="card-body">
            <!-- Barra de Pesquisa aprimorada -->
            <div class="search-bar-container">
                <input
                    type="text"
                    class="search-input"
                    placeholder="Pesquisar por nome ou código..."
                    wire:model.live.debounce.300ms="search"
                />
                <span class="search-icon">🔍</span>
            </div>
           
            <!-- Exibe a mensagem de sucesso se ela existir na sessão -->
            @if(session('success'))
                <div class="flash-message">{{ session('success') }}</div>
            @endif

            @if ($sensores->isEmpty())
                <p class="text-center" style="color: #6a9bd8;">Nenhum sensor encontrado.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Codigo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sensores as $sensor)
                            <tr wire:key="sensor-{{ $sensor->id }}">
                                <td>{{ $sensor->id }}</td>
                                <td>{{ $sensor->tipo }}</td>
                                <td>{{ $sensor->codigo }}</td>
                                <td>
                                    <label class="toggle-switch">
                                        <input type="checkbox"
                                            wire:click="toggleStatus({{ $sensor->id }})"
                                            {{ ($sensor->status == 'ativo' || $sensor->status == 1) ? 'checked' : '' }}
                                        />
                                        <span class="slider"></span>
                                        <div class="toggle-text">
                                            <span class="text-on">
                                                <span class="icon-on">✔️</span> ATIVO
                                            </span>
                                            <span class="text-off">
                                                <span class="icon-off">❌</span> INATIVO
                                            </span>
                                        </div>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>






