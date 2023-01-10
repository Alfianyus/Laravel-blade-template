<html>

<body>
    @switch($value)
        @case('A')
            Memuaskan
            @break
        @case('B')
            Baik
            @break
        @case('C')
            Cukup
            @break
        @default
            Tidak Lulus
    @endswitch
</body>

</html>