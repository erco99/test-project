<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { Button } from '@/components/ui/button';
import { usePage } from '@inertiajs/vue3';
import { ref } from "vue"
import ButtonController from '@/actions/App/Http/Controllers/Actions/ButtonController';
import { Form, Head } from '@inertiajs/vue3';
import ProfileController from '@/actions/App/Http/Controllers/Settings/ProfileController';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
];

const page = usePage();
const user = page.props.auth.user ;


</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <div class="h-screen flex items-center justify-center ">
                    <div class="flex items-center space-x-4">
                        <Form v-bind="ButtonController.increment.form()" method="post">
                            <Button type="submit">Click</Button>
                            <span class="text-lg font-medium">{{ user.button_clicked}} click</span>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
