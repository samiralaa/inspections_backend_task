@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Create Inspection</h2>
        <form id="inspection-form" action="{{ route('inspections.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" id="customer_name" class="form-control @error('customer_name') is-invalid @enderror" value="{{ old('customer_name') }}">
                    @error('customer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="order_no" class="form-label">Order No</label>
                    <input type="text" name="order_no" id="order_no" class="form-control @error('order_no') is-invalid @enderror" value="{{ old('order_no') }}">
                    @error('order_no')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="project" class="form-label">Project</label>
                    <input type="text" name="project" id="project" class="form-control @error('project') is-invalid @enderror" value="{{ old('project') }}">
                    @error('project')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="shape" class="form-label">Shape</label>
                    <input type="text" name="shape" id="shape" class="form-control @error('shape') is-invalid @enderror" value="{{ old('shape') }}">
                    @error('shape')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inspection_stage" class="form-label">Inspection Stage</label>
                    <input type="text" name="inspection_stage" id="inspection_stage" class="form-control @error('inspection_stage') is-invalid @enderror" value="{{ old('inspection_stage') }}">
                    @error('inspection_stage')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inspection_param" class="form-label">Inspection Parameter</label>
                    <input type="text" name="inspection_param" id="inspection_param" class="form-control @error('inspection_param') is-invalid @enderror" value="{{ old('inspection_param') }}">
                    @error('inspection_param')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="check" class="form-label">Check</label>
                    <input type="text" name="check" id="check" class="form-control @error('check') is-invalid @enderror" value="{{ old('check') }}">
                    @error('check')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="qc_notes" class="form-label">QC Notes</label>
                    <textarea name="qc_notes" id="qc_notes" class="form-control @error('qc_notes') is-invalid @enderror" rows="3">{{ old('qc_notes') }}</textarea>
                    @error('qc_notes')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="approved_by" class="form-label">Approved By</label>
                    <input type="text" name="approved_by" id="approved_by" class="form-control @error('approved_by') is-invalid @enderror" value="{{ old('approved_by') }}">
                    @error('approved_by')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="quality_inspector" class="form-label">Quality Inspector</label>
                    <input type="text" name="quality_inspector" id="quality_inspector" class="form-control @error('quality_inspector') is-invalid @enderror" value="{{ old('quality_inspector') }}">
                    @error('quality_inspector')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inspection_date" class="form-label">Inspection Date</label>
                    <input type="date" name="inspection_date" id="inspection_date" class="form-control @error('inspection_date') is-invalid @enderror" value="{{ old('inspection_date') }}">
                    @error('inspection_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Create Inspection</button>
                <a href="{{ route('inspections.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
