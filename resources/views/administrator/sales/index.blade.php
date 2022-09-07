@extends('layouts.sleek.main')

@section('styles')
<link href="{{ asset('admin/assets/plugins/datetimepicker/jquery.datetimepicker.min.css') }}" rel="stylesheet" />
@endsection

@section('scripts')
<script src="{{ asset('admin/assets/plugins/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

<script>
  jQuery(['#sent_date','#sale_date','#sent_date_edit','#sale_date_edit']).datetimepicker({
    i18n:{
    id:{
    months:[
    'Januari','Februari','Maret','April',
    'Mei','Juni','Juli','Augustus',
    'September','Oktober','November','Desember',
    ],
    dayOfWeek:[
    "Ming.", "Sen", "Sel", "Rab",
    "Kam", "Jum", "Sab.",
    ]
    }
    },
    timepicker:true,
    format:'Y-m-d H:i'
    });
</script>
@endsection

@section('content')
    <livewire:sales-index></livewire:sales-index>
@endsection