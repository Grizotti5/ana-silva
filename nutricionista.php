<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ana Silva</title>
  <meta name="description" content="Ana Silva, Nutricionista especializada em reeducação alimentar e emagrecimento saudável. Agende sua consulta e transforme sua relação com a comida." />
  <link rel="icon" href="data:image/svg+xml,
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'>
  <rect width='100' height='100' rx='20' fill='%2300a86b'/>
  <text x='50%' y='65%' font-size='60' text-anchor='middle' fill='white' font-family='Inter, sans-serif'>AS</text>
</svg>">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    body{font-family:Inter,ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto}
    :root{--primary:#22c55e;--accent:#10b981}
  </style>
</head>
<body class="bg-gradient-to-b from-green-50 to-white text-gray-800">
  <div id="app">
    <header class="sticky top-0 bg-white/70 backdrop-blur shadow-sm z-40">
      <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="#" class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-green-500 to-emerald-400 flex items-center justify-center text-white font-bold">AS</div>
          <div>
            <div class="font-extrabold text-lg">Ana Silva</div>
            <div class="text-xs text-gray-500 -mt-1">Nutricionista</div>
          </div>
        </a>
        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="#sobre" class="hover:text-slate-700">Sobre</a>
          <a href="#servicos" class="hover:text-slate-700">Serviços</a>
          <a href="#planos" class="hover:text-slate-700">Planos</a>
          <a href="#contato" class="text-white bg-gradient-to-r from-green-500 to-emerald-400 px-4 py-2 rounded-lg shadow-sm">Agendar consulta</a>
        </nav>
        <button @click="mobileOpen = !mobileOpen" class="md:hidden p-2 rounded-lg ring-1 ring-gray-200">
          <svg v-if="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
      <div v-show="mobileOpen" class="md:hidden px-6 pb-6">
        <nav class="flex flex-col gap-3">
          <a href="#sobre">Sobre</a>
          <a href="#servicos">Serviços</a>
          <a href="#planos">Planos</a>
          <a href="#contato" class="text-white bg-gradient-to-r from-green-500 to-emerald-400 px-4 py-2 rounded-lg">Agendar consulta</a>
        </nav>
      </div>
    </header>

    <section class="max-w-6xl mx-auto px-6 pt-16 flex flex-col md:flex-row items-center gap-10">
      <div class="w-full md:w-1/2">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900">Nutrição personalizada para o seu estilo de vida</h1>
        <p class="mt-4 text-gray-600 text-lg">Com Ana Silva, você aprende a se alimentar com prazer e equilíbrio, alcançando saúde e resultados duradouros — sem dietas restritivas.</p>
        <div class="mt-6 flex gap-3 items-center">
          <button @click="openForm('Consulta Online')" class="px-6 py-3 rounded-lg bg-gradient-to-r from-green-500 to-emerald-400 text-white font-semibold shadow-lg">Agende sua consulta</button>
          <a href="#planos" class="px-4 py-3 rounded-lg ring-1 ring-gray-200">Ver planos</a>
        </div>
      </div>
      <div class="w-full md:w-1/2 text-center">
        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=853" alt="Nutricionista" class="rounded-2xl shadow-lg"/>
      </div>
    </section>

    <section id="sobre" class="max-w-6xl mx-auto px-6 mt-16 grid md:grid-cols-2 gap-10 items-center">
      <div>
        <img src="https://plus.unsplash.com/premium_photo-1664301373088-1738e22de6ce?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470" alt="Ana Silva" class="rounded-2xl shadow-md" />
      </div>
      <div>
        <h2 class="text-3xl font-extrabold mb-4">Sobre Ana Silva</h2>
        <p class="text-gray-600 leading-relaxed">Sou nutricionista formada pela Universidade de São Paulo (USP) e há mais de 8 anos ajudo pessoas a reconectarem-se com o próprio corpo e a criarem uma relação leve com a comida. Acredito que comer bem é um ato de amor e autoconhecimento, não de culpa.</p>
        <p class="mt-4 text-gray-600">Trabalho com foco em reeducação alimentar, emagrecimento consciente e saúde intestinal, unindo ciência e empatia para criar planos que se encaixam na sua rotina real.</p>
      </div>
    </section>

    <section id="servicos" class="max-w-6xl mx-auto px-6 mt-16">
      <h2 class="text-3xl font-extrabold text-center">Serviços</h2>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="p-6 bg-white rounded-2xl shadow-sm">
          <h3 class="font-bold text-lg">Consulta Presencial</h3>
          <p class="mt-2 text-sm text-gray-600">Avaliação completa, plano alimentar e acompanhamento personalizado na clínica.</p>
        </div>
        <div class="p-6 bg-white rounded-2xl shadow-sm">
          <h3 class="font-bold text-lg">Consulta Online</h3>
          <p class="mt-2 text-sm text-gray-600">A mesma atenção e resultados da consulta presencial, no conforto da sua casa.</p>
        </div>
        <div class="p-6 bg-white rounded-2xl shadow-sm">
          <h3 class="font-bold text-lg">Mentoria Alimentar</h3>
          <p class="mt-2 text-sm text-gray-600">Acompanhamento de 4 semanas com foco em hábitos e mindset alimentar.</p>
        </div>
      </div>
    </section>

    <section id="planos" class="max-w-6xl mx-auto px-6 mt-16">
      <h2 class="text-3xl font-extrabold text-center">Planos de acompanhamento</h2>
      <div class="mt-8 flex flex-col md:flex-row gap-6 items-stretch">
        <div class="flex-1 bg-white rounded-2xl p-6 shadow">
          <h3 class="font-bold text-lg">Essencial</h3>
          <p class="text-sm text-gray-500 mb-2">Ideal para começar</p>
          <p class="text-2xl font-extrabold">R$180<span class="text-base font-medium"> / consulta</span></p>
          <ul class="mt-4 text-sm text-gray-600 space-y-2">
            <li>Consulta completa</li>
            <li>Plano alimentar personalizado</li>
            <li>Suporte por 7 dias</li>
          </ul>
          <button @click="openForm('Essencial')" class="mt-6 w-full px-4 py-3 rounded-lg bg-gradient-to-r from-green-500 to-emerald-400 text-white font-semibold">Agendar</button>
        </div>

        <div class="flex-1 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 shadow-xl">
          <h3 class="font-bold text-lg">Equilíbrio</h3>
          <p class="text-sm text-gray-500 mb-2">Mais popular</p>
          <p class="text-2xl font-extrabold">R$320<span class="text-base font-medium"> / mês</span></p>
          <ul class="mt-4 text-sm text-gray-600 space-y-2">
            <li>2 consultas mensais</li>
            <li>Revisões semanais</li>
            <li>Acesso a receitas exclusivas</li>
          </ul>
          <button @click="openForm('Equilíbrio')" class="mt-6 w-full px-4 py-3 rounded-lg bg-gradient-to-r from-green-500 to-emerald-400 text-white font-semibold">Assinar</button>
        </div>

        <div class="flex-1 bg-white rounded-2xl p-6 shadow">
          <h3 class="font-bold text-lg">Vitalidade</h3>
          <p class="text-sm text-gray-500 mb-2">Resultados acelerados</p>
          <p class="text-2xl font-extrabold">R$490<span class="text-base font-medium"> / mês</span></p>
          <ul class="mt-4 text-sm text-gray-600 space-y-2">
            <li>4 consultas mensais</li>
            <li>Acompanhamento diário via WhatsApp</li>
            <li>Suplementação personalizada</li>
          </ul>
          <button @click="openForm('Vitalidade')" class="mt-6 w-full px-4 py-3 rounded-lg bg-gradient-to-r from-green-500 to-emerald-400 text-white font-semibold">Assinar</button>
        </div>
      </div>
    </section>

    <section id="contato" class="max-w-6xl mx-auto px-6 mt-20 mb-20 grid md:grid-cols-2 gap-8">
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <h4 class="font-bold">Entre em contato</h4>
        <p class="mt-2 text-sm text-gray-600">Preencha seus dados e retornarei o mais breve possível.</p>
        <form @submit.prevent="submitContact" class="mt-4 space-y-4">
          <div>
            <label class="text-sm">Nome</label>
            <input v-model="contact.name" required class="mt-1 w-full rounded-lg border px-3 py-2" />
          </div>
          <div>
            <label class="text-sm">Email</label>
            <input v-model="contact.email" type="email" required class="mt-1 w-full rounded-lg border px-3 py-2" />
          </div>
          <div>
            <label class="text-sm">Mensagem</label>
            <textarea v-model="contact.message" rows="4" class="mt-1 w-full rounded-lg border px-3 py-2"></textarea>
          </div>
          <button type="submit" class="px-4 py-3 rounded-lg bg-gradient-to-r from-green-500 to-emerald-400 text-white">Enviar</button>
        </form>
      </div>

      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <h4 class="font-bold">Atendimento</h4>
        <p class="mt-2 text-sm text-gray-600">Av. Vitalidade, 456 — São Paulo/SP</p>
        <ul class="mt-4 text-sm text-gray-600 space-y-2">
          <li>Segunda à Sexta: 8h às 19h</li>
          <li>Sábado: 8h às 13h</li>
        </ul>
        <p class="mt-4 text-sm text-gray-600">WhatsApp: <strong>(11) 9 8888-7777</strong></p>
      </div>
    </section>

    <footer class="bg-white py-8">
      <div class="max-w-6xl mx-auto px-6 text-sm text-gray-500 flex flex-col md:flex-row items-center justify-between">
        <div>© Ana Silva Nutricionista 2025 · Todos os direitos reservados</div>
        <div class="flex gap-4 mt-4 md:mt-0">
          <a href="#">Instagram</a>
          <a href="#">LinkedIn</a>
          <a href="#">Política de privacidade</a>
        </div>
      </div>
    </footer>

    <div v-if="showForm" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
      <div class="bg-white rounded-2xl p-6 w-11/12 md:w-1/2 lg:w-1/3 shadow-lg">
        <div class="flex items-start justify-between">
          <div>
            <h4 class="font-bold">Agendar: {{ selectedService }}</h4>
            <p class="text-sm text-gray-500">Preencha seus dados para confirmação</p>
          </div>
          <button @click="closeForm" class="text-gray-400">✕</button>
        </div>
        <form @submit.prevent="submitForm" class="mt-4 space-y-4">
          <input v-model="form.name" placeholder="Nome completo" required class="w-full rounded-lg border px-3 py-2" />
          <input v-model="form.email" type="email" placeholder="Email" required class="w-full rounded-lg border px-3 py-2" />
          <input v-model="form.phone" placeholder="(11) 9 9999-9999" class="w-full rounded-lg border px-3 py-2" />
          <div class="flex gap-3">
            <button type="submit" class="flex-1 px-4 py-3 rounded-lg bg-gradient-to-r from-green-500 to-emerald-400 text-white">Confirmar</button>
            <button type="button" @click="closeForm" class="px-4 py-3 rounded-lg ring-1 ring-gray-200">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
  <script>
    const { createApp } = Vue;
    createApp({
      data(){
        return {
          mobileOpen:false,
          showForm:false,
          selectedService:'',
          contact:{name:'',email:'',message:''},
          form:{name:'',email:'',phone:''}
        }
      },
      methods:{
        openForm(service){this.selectedService=service;this.showForm=true},
        closeForm(){this.showForm=false},
        submitForm(){alert('Agendamento recebido para '+this.selectedService+'. Obrigado, '+this.form.name+'!');this.form={name:'',email:'',phone:''};this.showForm=false},
        submitContact(){alert('Mensagem enviada com sucesso, '+this.contact.name+'!');this.contact={name:'',email:'',message:''}}
      }
    }).mount('#app')
  </script>
</body>
</html>
