<?php

 if (!function_exists('customerStatus')) {
    /**
     * Get customer status text based on status code.
     *
     * @param int $status
     * @return string
     */
    function customerStatus(int $status): string
    {
        $statuses = [
            1 => 'Active',   // Status for active customers
            2 => 'Blocked',  // Status for blocked customers
            3 => 'Inactive', // Status for inactive customers
        ];

        // Return the status or a default value if the status is not defined
        return $statuses[$status] ?? 'Unknown';
    }
}
