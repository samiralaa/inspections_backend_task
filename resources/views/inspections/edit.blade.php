@extends('layouts.app')

@section('content')
    <h2>Edit Inspection</h2>
    <form action="{{ route('inspections.update', $inspection->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_name">Customer Name</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ old('customer_name', $inspection->customer_name) }}">
        </div>
        <div class="form-group">
            <label for="order_no">Order No</label>
            <input type="text" name="order_no" id="order_no" class="form-control" value="{{ old('order_no', $inspection->order_no) }}">
        </div>
        <div class="form-group">
            <label for="project">Project</label>
            <input type="text" name="project" id="project" class="form-control" value="{{ old('project', $inspection->project) }}">
        </div>
        <div class="form-group">
            <label for="shape">Shape</label>
            <input type="text" name="shape" id="shape" class="form-control" value="{{ old('shape', $inspection->shape) }}">
        </div>
        <div class="form-group">
            <label for="inspection_stage">Inspection Stage</label>
            <input type="text" name="inspection_stage" id="inspection_stage" class="form-control" value="{{ old('inspection_stage', $inspection->inspection_stage) }}">
        </div>
        <div class="form-group">
            <label for="inspection_param">Inspection Parameter</label>
            <input type="text" name="inspection_param" id="inspection_param" class="form-control" value="{{ old('inspection_param', $inspection->inspection_param) }}">
        </div>
        <div class="form-group">
            <label for="check">Check</label>
            <input type="text" name="check" id="check" class="form-control" value="{{ old('check', $inspection->check) }}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $inspection->status) }}">
        </div>
        <div class="form-group">
            <label for="qc_notes">QC Notes</label>
            <textarea name="qc_notes" id="qc_notes" class="form-control">{{ old('qc_notes', $inspection->qc_notes) }}</textarea>
        </div>
        <div class="form-group">
            <label for="approved_by">Approved By</label>
            <input type="text" name="approved_by" id="approved_by" class="form-control" value="{{ old('approved_by', $inspection->approved_by) }}">
        </div>
        <div class="form-group">
            <label for="quality_inspector">Quality Inspector</label>
            <input type="text" name="quality_inspector" id="quality_inspector" class="form-control" value="{{ old('quality_inspector', $inspection->quality_inspector) }}">
        </div>
        <div class="form-group">
            <label for="inspection_date">Inspection Date</label>
            <input type="date" name="inspection_date" id="inspection_date" class="form-control" value="{{ old('inspection_date', $inspection->inspection_date) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Inspection</button>
        <a href="{{ route('inspections.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
