<template>
    <div class="matrix">
        <div>
            <button class="btn btn-primary btn-sm" @click="addColumns">
                Add Column
            </button>
            <button class="btn btn-primary btn-sm" @click="addRows">
                Add Row
            </button>
        </div>
        <hr>

        <div v-for="(columns, c) in matrix">
            <input v-for="(rows, r) in columns" class="small-input"
                   type="text"
                   name="matrix1[]"
                   v-model="matrix[c][r]"
            />
        </div>
    </div>
</template>

<script>
    export default {
        props: ['matrix'],
        methods: {
            addColumns: function () {
                let columnsCount = this.matrix.length;

                if (columnsCount === 0) {
                    this.matrix.push([]);
                    return;
                }
                const rowCount = this.matrix[0].length;

                let rows = [];
                for (let i = 0; i < rowCount; i++) {
                    rows.push(0);
                }
                this.matrix.push(rows);
            },
            addRows: function () {
                const columnsCount = this.matrix.length;
                if (columnsCount > 0) {
                    for (let i = 0; i < columnsCount; i++) {
                        this.matrix[i].push(0);
                    }
                }
            }
        }
    }
</script>

<style lang="scss">
    .matrix {
        min-width: 250px;
        margin-right: 20px;

        .small-input {
            border: 1px solid #f1f1f1;
            width: 44px;
            padding: 10px;
            font-size: 1em;
            font-weight: bold;
            text-align: center;
        }
    }
</style>
