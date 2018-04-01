<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: {{ .File.Name }}

namespace {{ .File | php_namespace }};

/**
 *{{ .Service | service_comment .File | splitList "\n" | join "\n *" }}
 *
 * Generated from protobuf service <code>{{ .File.Package }}.{{ .Service.Name }}</code>
 */
interface {{ .Service | php_service_name }}
{
{{- range $method := .Service.Method }}
{{- $inputType := $method.InputType | trimPrefix (printf ".%s." ($.File.Package | trim)) | php_fqn }}
    /**
     *{{ $method | method_comment $.File $.Service | splitList "\n" | join "\n     *" }}
     *
     * Generated from protobuf method <code>{{ $.File.Package }}.{{ $.Service.Name }}/{{ $method.Name }}</code>
     *
     * @param array $ctx
     * @param {{ $inputType }} $req
     *
     * @return {{ $method.OutputType | trimPrefix (printf ".%s." ($.File.Package | trim)) | php_fqn }}
     */
    public function {{ $method.Name }}(array $ctx, {{ $inputType }} $req);
{{ end -}}
}
