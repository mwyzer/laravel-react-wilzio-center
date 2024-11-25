<?php

if (!function_exists('providerStatus')) {
    /**
     * Get the status label and style for a provider status code.
     *
     * @param int $status
     * @return array
     */
    function providerStatus(int $status): array
    {
        $statuses = [
            1 => ['label' => 'Terpasang', 'class' => 'badge badge-primary'], // Blue
            2 => ['label' => 'Stand By', 'class' => 'badge badge-warning'], // Brown
            3 => ['label' => 'Bermasalah', 'class' => 'badge badge-danger'], // Red
        ];

        return $statuses[$status] ?? ['label' => 'Unknown', 'class' => 'badge badge-secondary'];
    }
}
