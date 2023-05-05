Site da aplicação
{{-- CONTEÚDO QUE SO APARECE SE HOUVER USUÁRIO LOGADO --}}
@auth
    <h1>Usuário autenticado</h1>
    <p>ID - {{Auth::user()->id}}</p>
    <p>Nome - {{Auth::user()->name}}</p>
    <p>Email - {{Auth::user()->email}}</p>
@endauth

{{-- CONTEÚDO QUE APARECE QUANDO NÃO HÁ USUÁRIO LOGADO --}}
@guest
    Olá estrannho
    ...
    ...
    ...
@endguest