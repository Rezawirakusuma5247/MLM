@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
          <div class="col-6 mx-auto">
            <h1 class=" text-center text-bold font-italic">Structure</h1>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card p-3">
                    @foreach ($data as $level => $users)
                        @foreach ($users as $user)
                            <div style="margin-left: {{ $level * 30 }}px;">{{ $user->id }}. {{ $user->name }} -{{ $user->rank }}</div>
                            @if ($user->children)
                                @foreach ($user->children as $child)
                                    <div style="margin-left: {{ ($level + 1) * 30 }}px;">{{ $child->id }}. {{ $child->name }} -{{ $user->rank }}</div>
                                    @if ($child->children)
                                        @foreach ($child->children as $grandchild)
                                            <div style="margin-left: {{ ($level + 2) * 30 }}px;">{{ $grandchild->id }}. {{ $grandchild->name }} -{{ $user->rank }}</div>
                                            @if ($grandchild->children)
                                                @foreach ($grandchild->children as $greatGrandchild)
                                                    <div style="margin-left: {{ ($level + 3) * 30 }}px;">{{ $greatGrandchild->id }}. {{ $greatGrandchild->name }} -{{ $user->rank }}</div>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
