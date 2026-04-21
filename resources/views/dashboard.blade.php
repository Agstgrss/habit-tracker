<x-layout>
    <main class="py-10">
        <h1>Dashboard</h1>

        <p>
            Bem vindo (a), {{ auth()->user()->name }}! Este é o seu painel de controle. Aqui você pode acompanhar seus hábitos, ver estatísticas e gerenciar suas metas. Use o menu para navegar pelas diferentes seções e aproveitar ao máximo sua experiência de rastreamento de hábitos.
        </p>
    </main>
</x-layout>